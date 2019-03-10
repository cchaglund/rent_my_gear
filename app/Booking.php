<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Image;
use App\Category;
use App\Product;

class Booking extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
