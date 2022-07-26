<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProjectController;





Route::get('/single_product/{id}',[ProjectController::class,'single_product'])->name('single.product');




Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', [ProjectController::class,'products'])->name('products');

Route::get('/products/{category}', [ProjectController::class,'category'])->name('category');

//cart
Route::get('/cart', [CartController::class,'index'])->name('cart');
Route::post('/add_to_cart', [CartController::class,'add_to_cart'])->name('add_to_cart');
Route::post('/products/remove_from_cart', [CartController::class,'remove_from_cart'])->name('remove_from_cart');


Route::post('/edit_product_quantity', [CartController::class,'edit_product_quantity'])->name('edit_product_quantity');
Route::get('/checkout', [CartController::class,'checkout'])->name('checkout');
Route::post('/place_order', [CartController::class,'place_order'])->name('place_order');


//Payment
Route::get('/payment', [PaymentController::class,'payment'])->name('payment');
Route::get('/verify_payment/{transaction_id}', [PaymentController::class,'verify_payment'])->name('verify_payment');
Route::get('/complete_payment', [PaymentController::class,'complete_payment'])->name('complete_payment');

Route::get('/thank_you', [PaymentController::class,'thank_you'])->name('thank_you');


Route::get('/user_orders', [ProjectController::class,'user_orders'])->name('user_orders');
Route::get('/user_order_details/{id}', [ProjectController::class,'user_order_details'])->name('user_order_details');





/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/









