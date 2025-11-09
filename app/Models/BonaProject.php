<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BonaProject extends Model
{
    // اسم الجدول (اختياري لو كان نفس اسم الموديل بصيغة جمع)
    protected $table = 'bona_project';

    // الحقول التي يُسمح بملئها جماعيًا
    protected $fillable = [
        'title',
        'location',
        'description',
        'image',
        'sort_order',
    ];

    // التواريخ (إن رغبت في استخدامها)
    protected $dates = ['created_at', 'updated_at'];
}
