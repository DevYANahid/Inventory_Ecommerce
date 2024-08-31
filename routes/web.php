<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('Frontend.home');
});
Route::get('/blog_details', function () {
    return view('Frontend.blogdetails');
});
Route::get('admin',[AuthController::class,'admin_login']);
Route::post('admin',[AuthController::class,'auth_admin_login']);
Route::get('admin/logout',[AuthController::class,'admin_logout']);



Route::group(['middleware' => 'admin'],function(){
    Route::get('admin/dashboard',[DashboardController::class,'dashboard']);
    Route::get('admin/admin/list',[AdminController::class,'list']);
    Route::get('admin/admin/add',[AdminController::class,'add']);
    Route::post('admin/admin/add',[AdminController::class,'insert']);
    Route::get('admin/admin/edit/{id}',[AdminController::class,'edit']);
    Route::post('admin/admin/edit/{id}',[AdminController::class,'update']);
    Route::get('admin/admin/delete/{id}',[AdminController::class,'delete']);

    Route::get('admin/category/list',[CategoryController::class,'list']);
    Route::get('admin/category/add',[CategoryController::class,'add']);
    Route::post('admin/category/add',[CategoryController::class,'insert']);
    Route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);
    Route::post('admin/category/edit/{id}',[CategoryController::class,'update']);
    Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);
});
