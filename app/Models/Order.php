<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // status
    public function status()
    {
        return $this->belongsTo(Status::class)->withDefault();
    }

    //product
    public function product()
    {
        return $this->belongsTo(Product::class)->withDefault();
    }
}
