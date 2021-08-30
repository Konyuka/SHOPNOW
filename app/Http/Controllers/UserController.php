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
        return Inertia::render('Auth/Client');
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

            $checkUser = User::where('email', '=', Request::get('email'))->first();
            // return dd($checkUser);
            if ($checkUser === null) {
            // user doesn't exist
            
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
            
            }
            else{

             return redirect()
            ->back()
            ->with('error', 'Email Address already Registered');

            }
            return redirect()
            ->route('login')
            ->with('success', 'Welcome! Login to Continue');

    }

    public function storeUser(Request $request)
    { 
            
            $postData = Request::validate([
                'name' => ['required', 'max:50'],
                'store' => ['required', 'max:100'],
                'email' => ['required', 'max:100'],
                'phone' => ['required', 'max:100'],
                'password' => ['required', 'max:100'],
                'vendor' => ['required', 'max:100'],
            ]);

            $checkUser = User::where('email', '=', Request::get('email'))->first();
            if ($checkUser === null){

                $account = Account::create([
                'name' => $postData['store'],
            ]);

            $accountId =  json_decode($account['id']);  

            $registerUser = User::create([
                'account_id' => $accountId,
                'name' => $postData['name'],
                'email' => $postData['email'],
                'phone' => $postData['phone'],
                'password' => bcrypt($postData['password']),
                'owner' => $postData['vendor'],
            ]);

            return redirect()
            ->route('login')
            ->with('success', 'Welcome! Login to Continue');

            }else{
                return redirect()
                 ->back()
                 ->with('error', 'Email Address already Registered');

            }

            

    }

    public function updateClient(Request $request)
    {       
            $user = Auth::id();
            $postData = Request::validate([
                'name' => [ 'max:50'],
                'email' => [ 'max:100'],
                'primary' => ['nullable'],
                'alternate' => ['nullable'],
            ]);

            User::where('id', $user)
            ->update([
                'name' => $postData['name'],
                'email' => $postData['email'],
                'primary_number' => $postData['primary'],
                'secondary_number' => $postData['alternate'],
            ]);

            return redirect()
            ->route('clientProfile')
            ->with('success', 'Updated Succesfully');

    }

    public function updateVendor(Request $request)
    {       
            $user = Auth::id();
            $postData = Request::validate([
                'name' => [ 'max:50'],
                'email' => [ 'max:100'],
                'primary' => ['nullable'],
                'alternate' => ['nullable'],
                'location' => ['nullable'],
                'address' => ['nullable'],
                'identification' => ['nullable'],
                'gender' => ['nullable'],
            ]);

            User::where('id', $user)
            ->update([
                'name' => $postData['name'],
                'email' => $postData['email'],
                'primary_number' => $postData['primary'],
                'secondary_number' => $postData['alternate'],
                'location' => $postData['location'],
                'address' => $postData['address'],
                'identification' => $postData['identification'],
                'gender' => $postData['gender'],
            ]);

            return redirect()
            ->route('profile')
            ->with('success', 'Updated Succesfully');

    }

    public function updatePass(Request $request)
    {       
            $user = Auth::id();
            $postData = Request::validate([
                'newPass' => [ 'required'],
            ]);

            User::where('id', $user)
            ->update([
                'password' => bcrypt($postData['newPass']),
            ]);

            return redirect()
            ->route('clientProfile')
            ->with('success', 'Password Updated Succesfully');

    }


}
