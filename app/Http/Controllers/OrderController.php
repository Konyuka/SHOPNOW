<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
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

          return Inertia::render('Order/Index', [ 
              'orders' =>  response()->json(
                    Order::with(['product'])->get()
              ),
            //  'user' => $order->user()->get()
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
