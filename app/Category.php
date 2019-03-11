<?php

namespace App;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function child_categories() {
        return Category::where('parent_id', '=', $this->id)->get();
    }

    public function has_child_category()
    {
    	return Category::where('parent_id', $this->id)->exists();
    }
}
