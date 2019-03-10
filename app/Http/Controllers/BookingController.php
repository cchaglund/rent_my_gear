<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $booking = new Booking();

        Auth::user() ? $user_id = Auth::user()->id : $user_id = 0;
        
        $booking->user_id = $user_id;
        $booking->product_id = $request->product_id;
        $booking->owner_id = $request->owner_id;
        $booking->start_date = $request->startdate;
        $booking->end_date = $request->enddate;
        $booking->rec_address = $request->address;
        $booking->rec_city = $request->city;
        $booking->rec_phone = $request->phone;
        $booking->pending = true;
        $booking->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
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
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->pending = false;

        if ($request->decline) {    
            $booking->declined = true;
        }

        if ($request->approve) {    
            $booking->approved = true;
        }

        $booking->update();

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        $message = "Successfully deleted receipt";

        return redirect('/dashboard', compact($message));
    }
}
