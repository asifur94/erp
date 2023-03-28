<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});


// sales
Route::get('products', function () {
    return view('Sales.products.index');
});
Route::get('product', function () {
    return view('sales.products.view');
});
Route::get('AddProduct', function () {
    return view('sales.products.create');
});

Route::get('customer', function () {
    return view('sales.customers.index');
});

Route::get('order', function () {
    return view('sales.orders.index');
});

Route::get('checkout', function () {
    return view('sales.checkout.index');
});



// logistics
Route::get('products', function () {
    return view('logistics.products.index');
});
Route::get('product', function () {
    return view('logistics.products.view');
});
Route::get('AddProduct', function () {
    return view('logistics.products.create');
});

Route::get('customer', function () {
    return view('logistics.customers.index');
});


Route::get('checkout', function () {
    return view('logistics.checkout.index');
});

Route::get('seller', function () {
    return view('logistics.sellers.index');
});


// calender
Route::get('calender', function () {
    return view('calender.index');
});

// email
Route::get('email', function () {
    return view('email.index');
});
Route::get('messages', function () {
    return view('email.view');
});


// 404
Route::get('not found', function () {
    return view('404');
});


// HR
Route::get('employees', function () {
    return view('hr.employee.index');
});
Route::get('employee', function () {
    return view('hr.employee.view');
});
Route::get('AddEmployee', function () {
    return view('hr.employee.create');
});

Route::get('attendance', function () {
    return view('hr.attendance.index');
});

Route::get('leave', function () {
    return view('hr.leave.index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




});

require __DIR__.'/auth.php';
