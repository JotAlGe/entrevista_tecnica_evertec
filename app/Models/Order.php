<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_mobile',
        'process_url',
        'request_id'
    ];

    // status
    public function status()
    {
        return $this->belongsTo(Status::class)->withDefault();
    }
}
