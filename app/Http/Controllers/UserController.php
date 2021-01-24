<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserController extends Controller
{
    //


    public function index()
    {
      //Get all users and pass it to the view
      $users = User::orderBy('name', 'asc')->get();
  
      $roles = Role::all();//Get all roles

      $permissions = Permission::all();//Get all roles

      return view('admin.index',compact('users','roles','permissions'));
    }

    public function get_user($id)
    {
      //Get all users and pass it to the view
      $data = User::all()->where('id',$id)->first();
      
      return $data;
      //return view('admin.index',compact('users','roles','permissions'));
    }


     public function roles_store(Request $request)
    {
      //Get all users and pass it to the view
       $this->validate($request, [
            'name'=>'required|unique:roles|max:15',
            'permissions' =>'required',
            ]
        );

        $name = $request['name'];
        $role = new Role();
        $role->name = $name;

        $permissions = $request['permissions'];

        $role->save();
    //Looping thru selected permissions
        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail();
         //Fetch the newly created role and assign permission
            $role = Role::where('name', '=', $name)->first();
            $role->givePermissionTo($p);
        }

        return back()
            ->with('flash_message',
             'Role'. $role->name.' added!');
    }


      public function permissions_store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);

        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;

        $roles = $request['roles'];

        $permission->save();

        if (!empty($request['roles'])) { //If one or more role is selected
            foreach ($roles as $role) {
                $r = Role::where('id', '=', $role)->firstOrFail(); //Match input role to db record

                $permission = Permission::where('name', '=', $name)->first(); //Match input //permission to db record
                $r->givePermissionTo($permission);
            }
        }

        return back()->with('status','Permission'. $permission->name.' added!');
    }

     public function user_update(Request $request)
    {
    	$id = $request->input('task_id');

          $user = User::findOrFail($id); //Get role specified by id

    //Validate name, email and password fields
        // $this->validate($request, [
        //     'name'=>'required|max:120',
        //     'email'=>'required|email|unique:users,email,',
        //
        // ]);
        $input = $request->only(['username', 'email']); //Retreive the name, email and password fields
        $roles = $request['roles']; //Retreive all roles
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        }
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        return back()->with('status','User successfully edited.');
    }

       public function user_destroy($id)
    {
    	

          $user = User::findOrFail($id); //Get role specified by id
          $user->destroy();

   
        return back()->with('status','User successfully dropped.');
    }

}
