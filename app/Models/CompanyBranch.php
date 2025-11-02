<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class CompanyBranch extends Model
{
    protected $fillable = [
        'name','city','phone','email','map_link','image'
    ];
}

