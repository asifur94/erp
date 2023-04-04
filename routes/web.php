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
Route::get('stocks', function () {
    return view('Sales.stocks.index');
});
Route::get('Stock', function () {
    return view('sales.stocks.view');
});


Route::get('customer', function () {
    return view('sales.customers.index');
});

Route::get('expanse', function () {
    return view('sales.expanse.index');
});

Route::get('AddExpanse', function () {
    return view('sales.expanse.create');
});

Route::get('AddDeposit', function () {
    return view('sales.deposit.create');
});

Route::get('deposit', function () {
    return view('sales.deposit.index');
});

Route::get('order', function () {
    return view('sales.orders.index');
});
Route::get('AddOrder', function () {
    return view('sales.orders.create');
});
Route::get('OrderView', function () {
    return view('sales.orders.view');
});
Route::get('reshuffle', function () {
    return view('sales.orders.reshuffle');
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

Route::get('delivery', function () {
    return view('logistics.delivery.index');
});
Route::get('SendOrder', function () {
    return view('logistics.delivery.create');
});
Route::get('deliveryView', function () {
    return view('logistics.delivery..view');
});

Route::get('customer', function () {
    return view('logistics.customers.index');
});


Route::get('checkout', function () {
    return view('logistics.checkout.index');
});

Route::get('invoice', function () {
    return view('logistics.invoice.index');
});

Route::get('seller', function () {
    return view('logistics.sellers.index');
});

//accounts
Route::get('payments', function () {
    return view('accounts.payments.index');
});

Route::get('payment', function () {
    return view('accounts.payments.view');
});
Route::get('account', function () {
    return view('accounts.account.index');
});
Route::get('journal', function () {
    return view('accounts.account.view');
});

Route::get('cost', function () {
    return view('accounts.cost.index');
});

Route::get('AddCost', function () {
    return view('accounts.cost.create');
});




// calender
Route::get('calender', function () {
    return view('calender.index');
});

// email
Route::get('email', function () {
    return view('email.index');
});
Route::get('Create', function () {
    return view('email.create');
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

Route::get('punch', function () {
    return view('hr.punch.index');
});
Route::get('AddLeave', function () {
    return view('hr.punch.AddLeave');
});
Route::get('Leave', function () {
    return view('hr.punch.ViewLeave');
});






Route::get('Role', function () {
    return view('RolePermission.index');
});
Route::get('AddRole', function () {
    return view('RolePermission.create');
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
