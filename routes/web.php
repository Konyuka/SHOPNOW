<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Landing
Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

Route::get('/product/{product}', [LandingController::class, 'show'])
    ->name('product.view');

Route::get('/checkout', [LandingController::class, 'checkout'])
    ->name('checkout');
 
Route::post('/checkout/success', [OrderController::class, 'store'])
    ->name('order.store');

// Auth

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login')
    ->middleware('guest');

Route::post('login', [AuthenticatedSessionController::class, 'store'])
    ->name('login.store')
    ->middleware('guest');

Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('register/vendor', [UserController::class, 'vendor'])
    ->name('registerVendor');

Route::get('register/client', [UserController::class, 'client'])
    ->name('registerClient');   

Route::post('register', [UserController::class, 'store'])
    ->name('register');     

// Dashboard

Route::get('admin', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');    

// Products

Route::get('products', [ProductController::class, 'index'])
    ->name('products')
    ->middleware('auth');

Route::get('products/create', [ProductController::class, 'create'])
    ->name('products.create')
    ->middleware('auth');

Route::post('products', [ProductController::class, 'store'])
    ->name('products.store')
    ->middleware('auth');

Route::get('products/{organization}/edit', [ProductController::class, 'edit'])
    ->name('products.edit')
    ->middleware('auth');

Route::put('products/{organization}', [ProductController::class, 'update'])
    ->name('products.update')
    ->middleware('auth');

Route::delete('products/{organization}', [ProductController::class, 'destroy'])
    ->name('products.destroy')
    ->middleware('auth');

Route::put('products/{organization}/restore', [ProductController::class, 'restore'])
    ->name('products.restore')
    ->middleware('auth');    
  
// Profile

Route::get('profile', [ProfileController::class, 'index'])
    ->name('profile')
    ->middleware('auth');


// Order

Route::get('orders', [OrderController::class, 'index'])
    ->name('orders')
    ->middleware('auth');    

