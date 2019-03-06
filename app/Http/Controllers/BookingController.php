<?php

namespace App\Http\Controllers;

use App\Auth;
use App\Category;
use App\Product;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $bookings = Booking::all();
        $categories = Category::all();
		return view('bookings/index', ['bookings' => $bookings, 'categories' => $categories, 'products' => $product]);
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
     * @param  \App\Booking  $Booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        $categories = Category::all();
        return view('bookings/show', ['booking' => $booking, 'categories' => $categories,);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $Booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $Booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $Booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
