<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'city',
        'address',
        'service_type',
        'payment_method',
        'pickup_time',
        'notes',
    ];
}
