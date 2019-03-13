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
    	$status = [
    		'code' => '',
    		'message' => ''
    	];
    	if ($this->pending) {
    		$status['code'] = 'pending';
    		$status['message'] = "Pending loan approval";	
    	} else if ($this->approved) {
    		$status['code'] = 'approved';
    		$status['message'] = "Approved!";
    	} else if ($this->declined) {
    		$status['code'] = 'declined';
    		$status['message'] = "Declined :(";
    	} else {
    		$status['code'] = 'returned';
    		$status['message'] = "You've received your gear back!";
    	}
    	return $status;
    }
}
