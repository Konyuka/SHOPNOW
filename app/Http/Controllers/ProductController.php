<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;


class ProductController extends Controller
{
    public function index()
    {
        return Inertia::render('Products/Index', [
            // 'filters' => Request::all('search', 'trashed'),
            'products' => Auth::user()->account->products()
                ->orderBy('title')
                // ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($product) => [
                    'id' => $product->id,
                    'title' => $product->title,
                    'type' => $product->type,
                    'price' => $product->price,
                    'description' => $product->description,
                    // 'created_at' => $product->created_at,
                    'created_at' => date_format($product->created_at,'H:i:s D M Y '),
                    'deleted_at' => $product->deleted_at,
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
        return Inertia::render('Products/Create');
    }

   
    public function store(Request $request)
    {
        Auth::user()->account->products()->create(
            Request::validate([
                'type' => ['required', 'max:100'],
                'title' => ['required', 'max:50'],
                'price' => ['required', 'max:50'],
                'description' => ['nullable', 'max:150'],
            ])
        );

        return Redirect::route('products')->with('success', 'Product created.');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
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
