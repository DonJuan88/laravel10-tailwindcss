<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\admin\CatController;
use App\Http\Controllers\v1\admin\ItemController;
use App\Http\Controllers\v1\admin\UserController;
use App\Http\Controllers\v1\admin\AdminController;
use App\Http\Controllers\v1\admin\BrandController;
use App\Http\Controllers\v1\admin\OrderController;
use App\Http\Controllers\v1\admin\StatusController;
use App\Http\Controllers\v1\user\LoginRegisterController;

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
    return view('layouts.v1.user.main');
});

Route::get('admin/dashboard', function () {
        return view('v1.admin.dashboard');
});


Route::get('admin/login', function () {
    return view('v1.admin.akun.login');
});

Route::resource('admin/brands', BrandController::class);
Route::resource('admin/cats', CatController::class);
Route::resource('admin/products', ItemController::class);
Route::resource('admin/status', StatusController::class);
Route::resource('admin/customers', UserController::class);
Route::resource('admin/orders', OrderController::class);
Route::resource('admin/admins', AdminController::class);


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});