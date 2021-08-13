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
        
    }

   
    public function create()
    {
        return Inertia::render('Products/Create');
    }

   
    public function store(Request $request)
    {
        
            $postData = Request::validate([
                'category' => ['nullable', 'max:100'],
                'subCategory' => ['nullable', 'max:100'],
                'option' => ['nullable', 'max:100'],
                'title' => ['required', 'max:50'],
                'price' => ['nullable', 'max:50'],
                'description' => ['nullable'],
                'account_id' => ['required', 'integer'],
                'photos' => ['nullable'],
            ]);

            $addedProduct = Product::create([
                'category' => $postData['category'],
                'subCategory' => $postData['subCategory'],
                'option' => $postData['option'],
                'title' => $postData['title'],
                'price' => $postData['price'],
                'description' => $postData['description'],
                'account_id' => (int) $postData['account_id'],
                // 'photos' => $upload_url
            ]);

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

            return Redirect::route('products')->with('success', 'Product created successfully.');

    }

    public function destroy(Product $product)
    {      
        $product->delete();
        return Redirect::route('products')->with('success', 'Product deleted successfully.');
    }

   
    public function show($id)
    {
        
    }
    
    
}
