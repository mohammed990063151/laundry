<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModyafService extends Model
{
    protected $fillable = [
        'title','slug','phone','email','address','image','description'
    ];
}
