<?php

namespace App\Http\Controllers;

use\App\User;
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

    protected $validation_rules = [
		'name' => 'required|min:5',
		'desc' => 'required|min:50',
    ];
    
    public function index()
    {
        $user = Auth::user();
        if($user == null || $user->id== 0){
            $products = Product::all();
        }else{
            $products = Product::where('hidden', 0)->get();
        }
        return view('products/index', [
            'products' => $products,
            'user' => $user,
        ]);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate($this->validation_rules);
        $product = new Product();
		$product->user_id = Auth::user()->id;
		$product->name = $validData['name'];
		$product->desc = $validData['desc'];
        $product->category_id = $request->categories;
        $product->city = $request->city;
		$product->price = $request->price;
		$product->src = $request->src;
		$product->save();
        return redirect('/products/' . $product->id)->with('status', 'Product added successfully!');
    }

    public function show(Product $product)
    {
        $user = Auth::user();
        return view('products/show', [
            'product' => $product,
            'user' => $user,
        ]);
    }

    public function edit(Product $product)
    {
        $user = Auth::user();
        if ($product->user_id ==  Auth::user()->id|| $user->id == 0) {
            return view('products/edit', ['product' => $product]);
        } else {
            return redirect('/products')->with('warning', 'Access denied you do not own this product!');
        }
    }

    public function update(Request $request, Product $product)
    {
        if ($request->toggle_hide) {
            $product->hidden = !$product->hidden;
            $product->update();
            return redirect('/dashboard')->with('status', 'Visibility settings changed');
        }
        $validData = $request->validate($this->validation_rules);
        $product->name = $validData['name'];
		$product->desc = $validData['desc'];
        $product->category_id = $request->categories;
		$product->price = $request->price;
		$product->src = $request->src;
		$product->save();
        return redirect('/products/' . $product->id)->with('status', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        foreach ($product->bookings as $booking) {
            if ($booking->pending || $booking->approved) {
                return redirect('/dashboard')->with('status', 'Product has active bookings. Please decline all loans and try again.');    
            }
        }
        foreach ($product->bookings as $booking) {
            $booking->delete();
        }
        $product->delete();
        return redirect('/dashboard')->with('status', 'Product listing deleted');
    }
}

