<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // order
    public function order()
    {
        return $this->hasOne(Order::class);
    }

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
