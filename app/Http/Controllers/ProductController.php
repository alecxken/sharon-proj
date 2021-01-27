<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\LoanSetting;
use App\Models\UserLoan;
use App\Models\UserPayment;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class ProductController extends Controller
{
	   public function __construct()
    {
        $this->middleware('auth');
    }
    //
    	public function createproduct()
	{
		 $token = time();
      $t = date("Y",strtotime("now"));
      $token = strtoupper('PROD-'.$token.'-'.$t);
		$data = Product::all();
		return view('data.product',compact('data','token'));
	}

	     #Create a compnay
	public function viewproduct()
	{
		 
		$data = Product::all();
		//return $data;
		return view('data.productview',compact('data'));
	}

	    #Create a compnay
	public function myloan()
	{
		
		$data = UserLoan::join('products', 'products.id', '=', 'user_loans.product_id')
       ->select('user_loans.*','products.name')
       ->where('user_id',Auth::id())
       ->get();

       $product =UserLoan::all()->where('user_id',Auth::id())->count();

       $owed =UserLoan::all()->where('user_id',Auth::id())->sum('amount_owed');

       $paid =UserLoan::all()->where('user_id',Auth::id())->sum('amount_paid');

       $products =Product::all()->count();


	
		//return $data;
		return view('data.myloan',compact('product','data','owed','paid'));
	}


	    #Create a compnay
	public function payments()
	{
		
		$data = UserPayment::all();

	
		
		return view('data.payments',compact('data'));
	}

		public function loans()
	{
		
		
		$data = UserLoan::join('products', 'products.id', '=', 'user_loans.product_id')
		->join('users', 'users.id', '=', 'user_loans.product_id')
       ->select('user_loans.*','products.name','users.name')
       ->where('user_id',Auth::id())
       ->get();
		//return $data;
		return view('data.loans',compact('data'));
	}


 public function userloans($id)
    {
      //Get all users and pass it to the view
      $data = UserLoan::all()->where('id',$id)->first();
      
      return $data;
      //return view('admin.index',compact('users','roles','permissions'));
    }

#get a compnay
	public function getproduct($id)
	{
		$data = Product::all()->where('id',$id)->first();
		return $data;
	}

#get a compnay
	public function deleteproduct($id)
	{
		$data = Product::findorfail($id);
		$data->delete();
		return back()->with('danger','deleted successfully');
	
	}
    #product product
	public function storeproduct(Request $request)
	{
	   $data = new Product();
		$data->token = $request->input('token');
		$data->name = $request->input('name');
		$data->price = $request->input('price');
		$data->desc = $request->input('desc');
		$data->status = $request->input('status');
		$data->unit = $request->input('unit');
		  $media = $request->file('file');
		   // return $media;
        if($request->hasfile('file'))
             {  
                    $destinationPath = public_path('images/');
                    $filename1 = time().'-'.$media->getClientOriginalName();
                    $media->move($destinationPath, $filename1);
                    $files1 = $filename1;
                    $data->image = $files1;
                
            }
		$data->current_stock_level = $request->input('current_stock_level');
		$data->min_level_overall = $request->input('min_level_overall');
		// $data->min_level_store = $request->input('min_level_store');
       $data->save();



       return redirect('product-view')->with('status','Registered');
	}


	public function buyproducts(Request $request)
	{
	  
	    $interest = LoanSetting::all()->where('name',$request->input('loantype'))->first();

	    $exist = UserLoan::all()->where('status','Active')->where('user_id',Auth::id())->first();

	   if (!empty($exist))
	    {

	    	return back()->with('danger','You already have and active loan, please clear to borrow again');
	   	# code...
	   }
	   
	    $loans = (($interest->interest/100 * $request->input('total')) + $request->input('total'));

	    $loan = new UserLoan();
		$loan->loan_date = \Carbon\Carbon::today();
		$loan->product_id = $request->input('product_id');
		$loan->user_id =Auth::id();
		$loan->amount_paid = 0;
		$loan->loan_amount = $request->input('total');
		$loan->amount_owed = $loans;
		$loan->status = 'Active';
		$loan->save();

		return redirect('my-loan')->with('status','successfully Submitted');


       return redirect('product-view')->with('status','Registered');
	}



	public function storepayment(Request $request)
	{
	  
	    $deni = UserLoan::all()->where('id',$request->input('loan_id'))->first();

	   if ($request->input('amount_paid') > $deni->amount_owed) {
	   	return back()->with('danger','payment is more than amount owed');
	   }
	    $amount_owed = ($deni->amount_owed - $request->input('amount_paid'));
	    $amount_paid = ($deni->amount_paid + $request->input('amount_paid'));
	   if($amount_owed <= 0)
	   {
	   	$status = 'Closed';
	   }

	   else
	   {
	   	$status = 'Active';
	   }

	    $loan = UserLoan::findorfail($deni->id);
		$loan->amount_paid = $amount_paid;
	    $loan->amount_owed = $amount_owed;
		$loan->status = $status;
		$loan->save();

		$pays = new UserPayment();
		$pays->amount_paid = $request->input('amount_paid');
	    $pays->user_id =  Auth::id();
		$pays->loan_id =  $request->input('loan_id');
		$pays->save();

		return redirect('my-loan')->with('status','successfully Submitted');


       return redirect('product-view')->with('status','Registered');
	}

	

		public function buyproduct($id)
	{
		 
		$data = Product::all()->where('id',$id)->first();
		$loan = LoanSetting::all();
		//return $data;
		return view('data.viewproduct',compact('data','loan'));
	}

	     #Create a compnay
	public function viewloan()
	{
		 
		$data = LoanSetting::all();
		//return $data;
		return view('data.loansettings',compact('data'));
	}


	   #product product
	public function storeloan(Request $request)
	{
	    $data = new LoanSetting();
		$data->token = $request->input('token');
		$data->name = $request->input('name');
		$data->period = $request->input('period');
		$data->interest = $request->input('interest');
		$data->status = $request->input('status');
		$data->save();
       return back()->with('status','Registered');
	}

	public function deleteloan($id)
	{
		$data = LoanSetting::findorfail($id);
		$data->delete();
		return back()->with('danger','deleted successfully');
	
	}

}
