<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Inertia\Inertia;


use Illuminate\Http\Request;

class LandingController extends Controller
{
    
    public function checkout()
    {
        return Inertia::render('Landing/Checkout');
    }

    public function index()
    {
        $data = Product::all();
        return Inertia::render('Landing', ['allProducts' => $data]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return Inertia::render('Landing/Product', [
            'singleProduct' => [
                'id' => $product->id,
                'title' => $product->title,
                'type' => $product->type,
                'price' => $product->price,
                'description' => $product->description,
                'created_at' => date_format($product->created_at,'H:i:s D M Y '),
                'deleted_at' => $product->deleted_at,
            ],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
