<?php

namespace App;

use App\User;
use App\Image;
use App\Categoty;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
