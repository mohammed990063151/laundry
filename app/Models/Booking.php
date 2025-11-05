<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'city',
        'address',
        'service_type',
        'pickup_time',
        'payment_method',
        'email',
        'notes',
    ];
}
