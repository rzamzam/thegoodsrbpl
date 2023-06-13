<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PurchaseSupplierController;


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

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']); //logout
Route::get('/admin/adduser', function () {
    return view('admin.adduser');
})->middleware('admin');
Route::get('/admin', [AdminController::class, 'showAdmin'])->middleware('admin');
Route::post('/admin/adduser', [RegisterController::class, 'storeAdmin']);
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/supplier', [SupplierController::class, 'show'])->middleware('supplier');
Route::get('/owner', [OwnerController::class, 'show'])->middleware('owner');
Route::get('/buyer/invoice/{id}', [PurchaseController::class, 'viewInvoice']);
Route::get('/owner/invoice/{id}', [PurchaseSupplierController::class, 'viewInvoice']);
Route::get('/history', [PurchaseController::class, 'viewHistory'])->middleware('auth');
Route::get('/history_owner', [PurchaseSupplierController::class, 'viewHistory'])->middleware('auth');
Route::post('/buyer/purchase', [PurchaseController::class, 'store']);
Route::post('/owner/purchase', [PurchaseSupplierController::class, 'store']);

Route::get('/layout', function () {
    return view('layouts.layout');
});
Route::get('/katalog', [PurchaseController::class, 'show'])->middleware('auth');
Route::get('/pembayaran', function () {
    return view('buyer.pembayaran');
});
Route::get('/pembayaran', [PurchaseController::class, 'pembayaran']);

Route::get('/invoice', function () {
    return view('buyer.invoice');
});

Route::post('/logout', [LoginController::class, 'logout']); //logout

Route::get('/', function () {
    return view('home');
});