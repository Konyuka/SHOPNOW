<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
// use Illuminate\Http\Request;



// Landing

Route::get('email', [LandingController::class, 'newMail'])
    ->name('email');

Route::get('email/show', [LandingController::class, 'showMail'])
    ->name('email.show');


Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

Route::get('product/{product}', [LandingController::class, 'show'])
    ->name('product.view');
   
Route::get('cart', [LandingController::class, 'cart'])
    ->name('cart');    

Route::get('checkout', [LandingController::class, 'checkout'])
    ->name('checkout');
 
Route::post('checkout/success', [OrderController::class, 'store'])
    ->name('order.store');

Route::get('subcategory/{result}', [LandingController::class, 'result'])
    ->name('product.result');

Route::get('allcategory/{result}', [LandingController::class, 'categories'])
    ->name('product.category');   

Route::get('category/{result}', [LandingController::class, 'allResult'])
    ->name('product.allResult');  

Route::get('search', [LandingController::class, 'search'])
    ->name('product.search');    


// Auth

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login')
    ->middleware('guest');

Route::post('login', [AuthenticatedSessionController::class, 'store'])
    ->name('login.store')
    ->middleware('guest');

Route::post('/checkout/login', [AuthenticatedSessionController::class, 'storeCheckout'])
    ->name('login.checkout')
    ->middleware('guest');

Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('register/vendor', [UserController::class, 'vendor'])
    ->name('registerVendor')
    ->middleware('guest');

Route::get('register/client', [UserController::class, 'client'])
    ->name('registerClient')
    ->middleware('guest');   

Route::post('register/admin', [UserController::class, 'store'])
    ->name('registerAdmin'); 

Route::post('register/user', [UserController::class, 'storeUser'])
    ->name('registerUser');     

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

Route::get('products/{product}/edit', [ProductController::class, 'edit'])
    ->name('products.edit')
    ->middleware('auth');   
  
Route::put('products/{product}', [ProductController::class, 'update'])
    ->name('products.update')
    ->middleware('auth');    

Route::get('delete/{product}', [ProductController::class, 'destroy'])
    ->name('products.destroy')
    ->middleware('auth');    

Route::post('products', [ProductController::class, 'store'])
    ->name('products.store')
    ->middleware('auth');




Route::put('products/{organization}/restore', [ProductController::class, 'restore'])
    ->name('products.restore')
    ->middleware('auth');    
  
// Profile

Route::get('profile', [ProfileController::class, 'index'])
    ->name('profile')
    ->middleware('auth');

Route::get('profile/client', [ProfileController::class, 'clientIndex'])
    ->name('clientProfile')
    ->middleware('auth');
    

Route::post('update/client', [UserController::class, 'updateClient'])
    ->name('updateClient');  

Route::post('update/vendor', [UserController::class, 'updateVendor'])
    ->name('updateVendor');  

Route::post('update/clientPassword', [UserController::class, 'updatePass'])
    ->name('updateClientPass');     

// Order

Route::get('orders', [OrderController::class, 'index'])
    ->name('orders')
    ->middleware('auth');   
  
Route::get('orders/client', [OrderController::class, 'clientIndex'])
    ->name('clientOrders')
    ->middleware('auth');    

Route::get('orders/{order}', [OrderController::class, 'show'])
    ->name('order.view')
    ->middleware('auth');   

Route::get('client/orders/{order}', [OrderController::class, 'clientShow'])
    ->name('client.order.view')
    ->middleware('auth');        

