<?php

namespace App\Http\Controllers;
use App\Models\Account;

use Inertia\Inertia;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function vendor()
    {
        return Inertia::render('Auth/Vendor');
    }

    public function client()
    {
        return Inertia::render('Auth/Register');
    }
}
