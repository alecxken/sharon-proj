<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [UserController::class, 'index'])->name('admin');

Route::post('/roles_store', [UserController::class, 'roles_store'])->name('roles.store');

Route::post('/user_update', [UserController::class, 'user_update'])->name('user.update');

Route::get('/get-user/{id}', [UserController::class, 'get_user'])->name('roles.destroy');

Route::get('/user_destroy/{id}', [UserController::class, 'user_destroy'])->name('user.destroy');

Route::post('/roles_destroy/{id}', [UserController::class, 'destroy'])->name('roles.destroy');

Route::get('/product-create', [ProductController::class, 'createproduct'])->name('product.create');

Route::get('/product-view', [ProductController::class, 'viewproduct'])->name('product-view');

Route::post('/product-store', [ProductController::class, 'storeproduct'])->name('product-store');

Route::post('/product-buy', [ProductController::class, 'buyproducts'])->name('product-buy');

Route::post('/permissions_store', [UserController::class, 'permissions_store'])->name('permissions.store');

Route::post('/loan-store', [ProductController::class, 'storeloan'])->name('loan-store');

Route::get('/buy-prod/{id}', [ProductController::class, 'buyproduct'])->name('loan.destroy');

Route::get('/product-drop/{id}', [ProductController::class, 'deleteproduct'])->name('product.destroy');


Route::post('/loan-destroy/{id}', [ProductController::class, 'destroyloan'])->name('roles.destroy');

Route::get('/deleteloan/{id}', [ProductController::class, 'deleteloan'])->name('loan.destroy');

Route::get('/loan-create', [ProductController::class, 'viewloan'])->name('loan.create');

Route::get('/my-loan', [ProductController::class, 'myloan'])->name('loan.create');


