<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        if ($product->isBookedBetween($request->startdate, $request->enddate)) {
            return redirect('products/' . $product->id)->with('warning', "Gear not available at that time! Try another date");
        }
        $product_owner = $product->user_id;
        $booking = new Booking();
        Auth::user() ? $user_id = Auth::user()->id : $user_id = 0;
        $booking->user_id = $user_id;
        $booking->product_id = $request->product_id;
        $booking->owner_id = $product_owner;
        $booking->start_date = $request->startdate;
        $booking->end_date = $request->enddate;
        $booking->rec_address = $request->address;
        $booking->rec_email = $request->email;
        $booking->rec_city = $request->city;
        $booking->rec_phone = $request->phone;
        $booking->pending = true;
        $booking->save();
        return redirect('/dashboard')->with('status', "Booking made! Lean back and wait for the owner's response!");
    }

    public function show(Booking $booking)
    {
        //
    }

    public function edit(Booking $booking)
    {
        //
    }

    public function update(Request $request, Booking $booking)
    {
        $message = '';
        $booking->pending = false;
        if ($request->decline) {    
            $booking->declined = true;
            $message = 'Booking declined';
        }
        if ($request->approve) {    
            $booking->approved = true;
            $message = 'Booking approved';   
        }
        $booking->update();
        return redirect('/dashboard')->with('status', $message);
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect('/dashboard')->with('status', "Booking for '" . $booking->product->name . "'' deleted");
    }
}
