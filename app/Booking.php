<?php

namespace App;

use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function owner()
    {
    	return User::find($this->owner_id);
    }

    public function totalDays()
    {
    	$start_date = Carbon::create($this->start_date);
    	$end_date = Carbon::create($this->end_date);

    	$totalRentalDays = $start_date->diffInDays($end_date);

    	return $totalRentalDays;
    }

    public function totalPrice()
    {
    	$price = $this->product->price;
    	$start_date = Carbon::create($this->start_date);
    	$end_date = Carbon::create($this->end_date);

    	$totalRentalDays = $start_date->diffInDays($end_date);

    	return $this->totalDays() * $price;
    }

    public function status()
    {
    	if ($this->pending) {
    		return "Pending loan approval";
    	} else if ($this->approved) {
    		return "Approved!";
    	} else if ($this->declined) {
    		return "Declined";
    	} else {
    		return "Gear returned";
    	}
    }
}
