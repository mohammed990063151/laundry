<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    protected $fillable = [
        'title', 'description', 'image1', 'image2',
        'point1','point2','point3','point4'
    ];
}

