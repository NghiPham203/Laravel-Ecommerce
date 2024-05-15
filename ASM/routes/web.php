<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CrudController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/detail/{slug}', [DetailController::class, 'detail']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/crud', [CrudController::class, 'crud'])->name('crud');
