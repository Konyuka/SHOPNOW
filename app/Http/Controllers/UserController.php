<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Inertia\Inertia;


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

    public function store(Request $request)
    { 
            
            $postData = Request::validate([
                'name' => ['required', 'max:50'],
                'store' => ['required', 'max:100'],
                'email' => ['required', 'max:100'],
                'phone' => ['required', 'max:100'],
                'identification' => ['required', 'max:100'],
                'password' => ['required', 'max:100'],
                'vendor' => ['required', 'max:100'],
            ]);

            $account = Account::create([
                'name' => $postData['store'],
            ]);

            $accountId =  json_decode($account['id']);  

            $registerUser = User::create([
                'account_id' => $accountId,
                'name' => $postData['name'],
                'email' => $postData['email'],
                'phone' => $postData['phone'],
                'identification' => $postData['identification'],
                'password' => bcrypt($postData['password']),
                'owner' => $postData['vendor'],
            ]);

            return redirect()
            ->route('login')
            ->with('success', 'Welcome! Login to Continue');

    }


}
