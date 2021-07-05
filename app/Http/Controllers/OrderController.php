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
    public function index()
    {
        //  return Inertia::render('Order/Index');
        //   return response()->json(Order::with(['product'])->get(),200);

          return Inertia::render('Order/Index', [ 
              'orders' =>  response()->json(Order::with(['product'])->get(),200)
          ]);

          return Inertia::render('Order/Index', [
            'orders' => Auth::user()->account->orders()
                ->orderBy('title')
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($order) => [
                    'id' => $order->id,
                    'product_id' => $order->product_id,
                    'user_id' => $order->user_id,
                    'quantity' => $order->quantity,
                    'address' => $order->address,
                    'is_delivered' => $order->is_delivered,
                    'products' => $order->orders()->orderByName()->get()->map->only('id', 'name', 'city', 'phone'),
                ]),
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
                'product_id' => $request->product_id,
                'user_id' =>  $request->product_id,
                'quantity' => $request->quantity,
                'address' => $request->address,
                'is_delivered' => $request->is_delivered,
                // 'country' => $request->country,
                // 'postal_code' => $request->postal_code,
                
            ]);


        return Redirect::route('landing')->with('success', 'Order Placed.');    

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
