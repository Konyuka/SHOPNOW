<?php
// use App\Http\Controllers\UserController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::inertia('/', 'Landing');
Route::inertia('/register', 'Register');
Route::inertia('/login', 'Login');
Route::inertia('/admin', 'Dashboard');
