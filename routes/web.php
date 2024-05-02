<?php

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
Route::get('admin',[AuthController::class,'admin_login']);
Route::post('admin',[AuthController::class,'auth_admin_login']);
Route::post('admin/logout',[AuthController::class,'admin_logout']);




Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
