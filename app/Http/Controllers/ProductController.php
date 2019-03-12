<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Category;
use App\Product;
use Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('hidden', 0)->get();
        $user = Auth::user();

        return view('products/index', [
            'products' => $products,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
		$product->user_id = Auth::user()->id;
		$product->name = $request->name;
        $product->category_id = $request->category;
		$product->desc = $request->desc;
		$product->price = $request->price;
		$product->src = $request->src;
		$product->save();
        return redirect('/products/' . $product->id)->with('status', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $user = Auth::user();
        
        return view('products/show', [
            'product' => $product,
            'user' => $user,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return "Edit page";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->hidden = !$product->hidden;
        $product->update();
        return redirect('/dashboard')->with('status', 'Visibility settings changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

