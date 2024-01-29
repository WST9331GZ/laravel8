<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;  //เขียนเพิ่ม
use App\Http\Controllers\UserController;  //เขียนเพิ่ม
use App\Http\Controllers\VehicleController;  //เขียนเพิ่ม
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\QuotationDetailController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('post', 'PostController');
Route::resource('post', PostController::class);
//Route::resource('profile', 'ProfileController');
//Route::resource('user', 'UserController');
//Route::resource('vehicle', 'VehicleController');
Route::resource('profile', ProfileController::class);
Route::resource('user', UserController::class);
Route::resource('vehicle', VehicleController::class);

// Route::resource('customer', 'CustomerController');
// Route::resource('quotation', 'QuotationController');
// Route::resource('quotation-detail', 'QuotationDetailController');
Route::middleware(['auth'])->group(function () {
    Route::resource('customer', CustomerController::class);
    Route::get('quotation/{id}/pdf', [QuotationController::class, 'pdf']);
    Route::resource('quotation', QuotationController::class);
    Route::resource('quotation-detail', QuotationDetailController::class);
});

Route::resource('product', 'ProductController');
Route::resource('product', 'ProductController');