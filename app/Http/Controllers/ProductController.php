<?php

namespace App\Http\Controllers;

use Auth;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    protected $validation_rules = [
		'name' => 'required|min:5',
		'desc' => 'required|min:50',
	];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $user = Auth::user();
        
        return view('products/index', [
            'products' => $products,
            'user' => $user
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
        $validData = $request->validate($this->validation_rules);

        $product = new Product();
		$product->user_id = Auth::user()->id;
		$product->name = $validData['name'];
		$product->desc = $validData['desc'];
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
            'user' => $user
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
        return view('products/edit', ['product' => $product]);
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
        $validData = $request->validate($this->validation_rules);

        $product->name = $validData['name'];
		$product->desc = $validData['desc'];
		$product->price = $request->price;
		$product->src = $request->src;
		$product->save();
        return redirect('/products/' . $product->id)->with('status', 'Product updated successfully!');
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

