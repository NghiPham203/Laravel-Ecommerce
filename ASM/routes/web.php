<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;


// Products
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/detail/{slug}', [DetailController::class, 'detail']);
Route::get('/categories/{category_id}', [ProductController::class, 'getproductsByCategories'])->name('categories');
Route::get('/search', [ProductController::class, 'search'])->name('search');

// Cart & Checkout
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/addtocart', [CartController::class, 'addToCart']);
Route::post('/cart/increase/{id}', [CartController::class, 'increaseQuantity'])->name('cart.increase');
Route::post('/cart/decrease/{id}', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
Route::post('/cart/empty', [CartController::class, 'emptyCart'])->name('cart.empty');
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/checkout', [CartController::class, 'showCheckOutForm'])->name('checkoutform');


// Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/adProducts', [AdminController::class, 'adProducts'])->name('adProducts');
Route::post('/ad-Products', [AdminController::class, 'storeProduct']);
Route::delete('/deleteproduct/{id}', [AdminController::class, 'deleteProduct'])->name('deleteproduct');
Route::put('/updateproduct/{id}', [AdminController::class, 'updateProduct'])->name('updateproduct');





//Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/crud', [CrudController::class, 'crud'])->name('crud');

// Login & Resister
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'postRegister'])->name('postRegister');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// Forgot Pass
Route::get('/forget-password', function () {
    return view('forgetpass');
})->name('forgetPassword');
Route::post('/forgetPassword', [UserController::class, 'forgetPassword'])->name('form-forget-password');

//route view mã xác nhận và handle
Route::get('/verify-code', function () {
    return view('verifyCode');
})->name('verify-code');
Route::post('/verify-code', [UserController::class, 'verifyCode'])->name('verify-code');

// route view nhập lại mật khẩu và handle
Route::get('/reset-password', function () {
    return view('resetPassword');
})->name('reset-password');
Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('reset-password');


