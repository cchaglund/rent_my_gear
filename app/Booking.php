<?php

namespace App;
use App\User;
use App\Image;
use App\Category;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
