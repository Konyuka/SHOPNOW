<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

// use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function showMail()
    {
        return Inertia::render('Landing/Email');
    }

    public function newMail(Request $request)
    {
        $details = Request::validate([
                'to' => ['nullable', 'max:100'],
                'from' => ['nullable', 'max:100'],
                'subject' => ['nullable', 'max:100'],
                'title' => ['required', 'max:50'],
                'body' => ['nullable', 'max:50'],
            ]);

        // return dd($details);    

        // $details = [
        //     'to' => $request->to,
        //     'from' => $request->from,
        //     'subject' => $request->subject,
        //     'title' => $request->title,
        //     "body"  => $request->body
        // ];
        

        \Mail::to($details['to'])->send(new \App\Mail\Mailer($details));

        if (Mail::failures()) {
            return response()->json([
                'status'  => false,
                'data'    => $details,
                'message' => 'Nnot sending mail.. retry again...'
            ]);
        }

        return response()->json([
            'status'  => true,
            'data'    => $details,
            'message' => 'Your details mailed successfully'
        ]);
    }

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

    
    public function store(Request $request)
    {
        //
    }

    public function search()
    {
        
        $key = \Request::get('search');
        $search = Product::where('title', 'like', '%' . $key . '%')
                ->orWhere('description', 'like', '%' . $key . '%')
                ->orWhere('category', 'like', '%' . $key . '%')
                ->orWhere('subCategory', 'like', '%' . $key . '%')
                ->orWhere('option', 'like', '%' . $key . '%')
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

    public function categories($result)
    {
        $results = Product::where('category', $result)
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
                'account_id' => $product->account_id,
                'created_at' => date_format($product->created_at,'H:i:s D M Y '),
                'deleted_at' => $product->deleted_at,
            ],
            'account' => $account,
            'vendor' => $user_account
        ]);
    }

    public function edit( $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
