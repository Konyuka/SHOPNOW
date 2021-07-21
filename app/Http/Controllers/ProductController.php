<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Account;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

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
            //    ->take(10)
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
                    'created_at' => format($product->created_at,'H:i:s D M Y '),
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
        
            $postData = Request::validate([
                'category' => ['nullable', 'max:100'],
                'subCategory' => ['nullable', 'max:100'],
                'title' => ['required', 'max:50'],
                'price' => ['nullable', 'max:50'],
                'description' => ['nullable'],
                'account_id' => ['required', 'integer'],
                'photos' => ['nullable'],
            ]);

            $addedProduct = Product::create([
                'category' => $postData['category'],
                'subCategory' => $postData['subCategory'],
                'title' => $postData['title'],
                'price' => $postData['price'],
                'description' => $postData['description'],
                'account_id' => (int) $postData['account_id'],
                // 'photos' => $upload_url
            ]);

            // return dd($addedProduct['account_id']);

            $images=$postData['photos'];
            $collection = collect([]);
            if ($images) {
                foreach ($images as $file) {
                    $ext = $file->getClientOriginalExtension();
                    $name = time().'-'.".".$ext;
                    $upload_path = 'image/products/';
                    $upload_url = $upload_path.$name;
                    // $collection->push($upload_path.$name);
                    // $upload_url[0] = array_push($upload_path.$name);
                    $file->move(public_path($upload_path),$upload_url);
                    Product::where('_id', $addedProduct['_id'])
                        ->update(['photos' => (array) $upload_url]);

                }
            }

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
