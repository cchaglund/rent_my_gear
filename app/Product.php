<?php

namespace App;

use App\Booking;
use App\Category;
use App\Image;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

	public function isBookedBetween($start_date, $end_date)
    {
        $bookings = $this->bookings();

        if (! $bookings->exists()) {
            return false;
        }

        $start = date($start_date);
        $end = date($end_date);
        $start_conflict = $bookings->whereBetween('start_date', [$start, $end]);
        $end_conflict = $bookings->whereBetween('end_date', [$start, $end]);
        if ($start_conflict->exists() || $end_conflict->exists() ) {
            return true;
        }
        return false;
    }
}
