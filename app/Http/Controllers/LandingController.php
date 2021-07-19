<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use App\Models\Product;
use Inertia\Inertia;


// use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function cart()
    {
        return Inertia::render('Landing/Cart');
    }

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

    public function search()
    {
        
        $key = \Request::get('search');
        $search = Product::where('title', 'like', '%' . $key . '%')
                ->orWhere('description', 'like', '%' . $key . '%')
                ->orWhere('subCategory', 'like', '%' . $key . '%')
                ->orWhere('category', 'like', '%' . $key . '%')
                ->get();

        return Inertia::render('Landing/Result', [
            'allProducts' => $search,
            'category' =>  $key,
        ]);
    }

    public function allResult($result)
    {
        $results = Product::where('category', $result)
            ->get();
        
        return Inertia::render('Landing/Result', [
             'allProducts' =>  $results,
             'category' =>  $result,
        ]);
    }
    
    public function result($result)
    {
        $results = Product::where('subCategory', $result)
            ->get();
        
        return Inertia::render('Landing/Result', [
             'allProducts' =>  $results,
             'category' =>  $result,
        ]);
    }

    public function show(Product $product)

    {
        $account_id = $product->account_id; 
        $user_account = DB::table('users')->where('account_id', $account_id)->first();
        $account = DB::table('accounts')->where('id', $user_account->account_id)->first();

        return Inertia::render('Landing/Product', [
            'singleProduct' => [
                '_id' => $product->_id,
                'title' => $product->title,
                'category' => $product->category,
                'subCategory' => $product->subCategory,
                'price' => $product->price,
                'description' => $product->description,
                'photos' => $product->photos,
                'created_at' => date_format($product->created_at,'H:i:s D M Y '),
                'deleted_at' => $product->deleted_at,
            ],
            'account' => $account,
            'vendor' => $user_account
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
