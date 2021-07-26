<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Account;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

use Inertia\Inertia;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Order $order)
    {

        $user = Auth::id();
        $user_account = DB::table('users')->where('id', $user)->first();
        $account_id = $user_account->account_id; 

        
        $orders = Order::where('products.account_id', $account_id)
        ->orderBy('updated_at', 'desc')
        ->get();
        
        return Inertia::render('Order/Index', [ 
            'orders' =>  $orders, 
        ]);    


    }

    public function clientIndex(Order $order )
    {
        $user = Auth::id();
        $user_account = DB::table('users')->where('id', $user)->first();
        $account_id = $user_account->account_id; 

        // return dd($account_id);

        $orders = Order::where('userAccount.account.id', $account_id)
        ->orderBy('updated_at', 'desc')
        ->get();

        return Inertia::render('Client/Orders', [ 
            'orders' =>  $orders, 
        ]); 
    }

    public function show(Order $order)

    {
        // $order_id = $product->account_id; 
        // $user_account = DB::table('users')->where('account_id', $account_id)->first();
        // $account = DB::table('accounts')->where('id', $user_account->account_id)->first();

        return Inertia::render('Order/Show', [
            'orderDetails' => [
                '_id' => $order->_id,
                'name' => $order->name,
                'phone' => $order->phone,
                'address' => $order->address,
                'city' => $order->city,
                'zip' => $order->zip,
                'payment' => $order->payment,
                'products' => $order->products,
                'userAccount' => $order->userAccount,
                'created_at' => date_format($order->created_at,'H:i:s D M Y '),
                'updated_at' => $order->updated_at,
            ],
            // 'account' => $account,
            // 'vendor' => $user_account
        ]);
    }

    public function clientShow(Order $order)

    {
        // $order_id = $product->account_id; 
        // $user_account = DB::table('users')->where('account_id', $account_id)->first();
        // $account = DB::table('accounts')->where('id', $user_account->account_id)->first();

        return Inertia::render('Client/showOrder', [
            'orderDetails' => [
                '_id' => $order->_id,
                'name' => $order->name,
                'phone' => $order->phone,
                'address' => $order->address,
                'city' => $order->city,
                'zip' => $order->zip,
                'payment' => $order->payment,
                'products' => $order->products,
                'userAccount' => $order->userAccount,
                'created_at' => date_format($order->created_at,'H:i:s D M Y '),
                'updated_at' => $order->updated_at,
            ],
            // 'account' => $account,
            // 'vendor' => $user_account
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $postData = Request::validate([
                'name' => ['nullable', 'max:100'],
                'phone' => ['required', 'max:50'],
                'address' => ['nullable', 'max:50'],
                'city' => ['nullable', 'max:150'],
                'country' => ['nullable', 'max:150'],
                'zip' => ['nullable', 'max:150'],
                'payment' => ['nullable', 'max:150'],
                'products' => ['required'],
                'userAccount' => ['required'],
            ]);

        Order::create([
                'name' => $postData['name'],
                'phone' => $postData['phone'],
                'address' => $postData['address'],
                'city' => $postData['city'],
                'country' => $postData['country'],
                'zip' => $postData['zip'],
                'payment' => $postData['payment'],
                'products' => $postData['products'],
                'userAccount' => $postData['userAccount'],
                'orderTime' => now()->format('Y-m-d'),
            ]);

        return Redirect::route('landing')->with('success', 'Order Placed Successfully');    

         $order = Order::create([
                'product_id' => $request->products,
                'user_id' => Auth::user()->account_id,
                // 'quantity' => $request->quantity,
                'address' => $request->address
            ]);
         
         return Redirect::route('landing')->with('success', 'Order Placed Successfully.');    
    

         $postData = Request::validate([
                'name' => [ 'max:50'],
                'phone' => [ 'max:100'],
                'address' => [ 'max:100'],
                'city' => [ 'max:100'],
                'county' => [ 'max:100'],
                'zip' => [ 'max:100'],
                'payment' => [ 'max:100'],
                'products' => [ 'max:100'],
                'userId' => [ 'max:100'],
            ]);   

            $order = Order::create([
                    'product_id' => $postData['products'],
                    'user_id' =>   Auth::user()->account_id,
                    // 'quantity' => $postData['userId'],
                    'address' => $postData['address'],
                    // 'is_delivered' => $request->is_delivered,                
                ]);


        return Redirect::route('landing')->with('success', 'Order Placed Successfully.');    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
