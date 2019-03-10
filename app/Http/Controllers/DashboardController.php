<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::guest()) {
            return redirect('/home');
        }

        $user = Auth::user();

        $products = $user->products;
        $bookings = $user->bookings;
        $rented_out_gear = $user->rented_out_gear();

        return view('dashboard', [
            'user' => $user,
            'products' => $products,
            'bookings' => $bookings,
            'rented_out_gear' => $rented_out_gear
        ]);
    }
}
