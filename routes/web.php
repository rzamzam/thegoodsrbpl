<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;

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
    return view('login');
});

Route::get('/home', function () {
    return view('homepage');
});


Route::get('/admin/adduser', function () {
    return view('admin.adduser');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/admin', [AdminController::class, 'show']);
Route::get('/supplier', [AdminController::class, 'showSupplier']);
Route::get('/owner', [OwnerController::class, 'show']);
Route::post('/admin/adduser', [AdminController::class, 'store']);
