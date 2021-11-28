<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Mail\ConfirmedOrder;


Route::get('/', [GenericController::class, 'indexPage'])->name('welcome');

// Route::get('/email', function () {
//     return new ConfirmedOrder();
// });

Route::get('/check-out/with-ref/{orderRefreces}', [GenericController::class, 'checkOutPage'])->name('checkOutPage');
Route::post('/{productId}/check-out', [GenericController::class, 'checkOut'])->name('checkOut');

Route::get('/check-out/with-ref/{orderRefreces}/callback', [GenericController::class, 'callBack'])->name('callBack');
Route::get('/order/{orderRefreces}/payment-success', [GenericController::class, 'paymentSuccess'])->name('paymentSuccess');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

// list of all authenticated endpionts
Route::get('/products', [ProductController::class, 'products'])->middleware(['auth'])->name('products');
Route::get('/add-product', [ProductController::class, 'addProduct'])->middleware(['auth'])->name('addProduct');
Route::post('/add-product', [ProductController::class, 'addProductDb'])->middleware(['auth']);

Route::get('/product/{id}/enable-sale', [ProductController::class, 'enableSale'])->middleware(['auth'])->name('enableSale');
Route::get('/product/{id}/disable-sale', [ProductController::class, 'disableSale'])->middleware(['auth'])->name('disableSale');

Route::get('/orders', [OrderController::class, 'orders'])->middleware(['auth'])->name('orders');

require __DIR__ . '/auth.php';
