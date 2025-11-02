<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAbout extends Model
{
    protected $table = 'company_about';
    protected $fillable = [
        'title','subtitle','header_image','intro',
        'point1','point2','point3','point4'
    ];
}
