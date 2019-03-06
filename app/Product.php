<?php

namespace App;

use App\User;
use App\Image;
use App\Category;
use App\Booking;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
    public function booking() {
        return $this->belongsTo(Booking::class);
    }
}
