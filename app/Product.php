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

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
