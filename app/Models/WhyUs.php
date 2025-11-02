<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
    protected $table = 'whyus';

    protected $fillable = [
        'title', 'description','image1','image2','image3','image4'
    ];
     public $timestamps = false;
}
