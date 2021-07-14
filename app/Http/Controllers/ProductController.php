<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Account;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

use Inertia\Inertia;



class ProductController extends Controller
{
    public function index()
    {
        $user = Auth::id();
        $user_account = DB::table('users')->where('id', $user)->first();
        $account_id = $user_account->account_id; 

        $products = Product::where('account_id', $account_id)
               ->orderBy('updated_at', 'desc')
               ->take(10)
               ->get();

        return Inertia::render('Products/Index', [ 'products' =>  $products ]); 
        
        

        return json_decode($products);
        
        $account = User::where('account_id', $id);
       
        return dd($user);        
        $posts = Post::where('author.name', 'John')
            ->get();

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
        // Auth::user()->account->products()->create(
        //     Request::validate([
        //         'type' => ['required', 'max:100'],
        //         'title' => ['required', 'max:50'],
        //         'price' => ['required', 'max:50'],
        //         'description' => ['nullable', 'max:150'],
        //     ])
        // );

            $postData = Request::validate([
                'type' => ['nullable', 'max:100'],
                'title' => ['required', 'max:50'],
                'price' => ['nullable', 'max:50'],
                'description' => ['nullable', 'max:150'],
                'account_id' => ['required', 'max:150'],
            ]);

            // $account = Account::create([
            //     'name' => $postData['store'],
            // ]);

            // $accountId =  json_decode($account['id']);  

            Product::create([
                'title' => $postData['title'],
                'type' => $postData['type'],
                'price' => $postData['price'],
                'description' => $postData['description'],
                'account_id' => $postData['account_id'],
            ]);

            return Redirect::route('products')->with('success', 'Product created.');



        // Request::validate([
        //     'title' => ['required', 'max:50'],
        //     'type' => ['nullable', 'max:100'],
        //     'price' => ['nullable', 'max:50'],
        //     'description' => ['nullable', 'max:150'],
        // ]);

        // $product=new Product();
        // $product->type = $request->get('type');
        // $product->title = $request->get('title');
        // $product->price = $request->get('price');        
        // $product->description = $request->get('description');        
        // $product->save();

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
