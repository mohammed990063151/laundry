<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'description',
        'image1','image2','image3','image4','image5','image6',
        'caption1','caption2','caption3','caption4','caption5','caption6'
    ];
}
