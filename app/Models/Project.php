<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // ✅ الحقول المسموح بالحفظ الجماعي لها
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'location',
        'completion_date',
    ];
}
