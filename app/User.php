<?php

namespace App;

use App\Booking;
use App\Product;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function products() {
        return $this->hasMany(Product::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function rented_out_gear()
    {
        return Booking::where('owner_id', $this->id)->get();
    }

    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'address', 'city', 'phone'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
