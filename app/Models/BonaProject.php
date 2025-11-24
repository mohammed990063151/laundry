<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


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
        'short_description',
        'long_description',
        'sort_order',
    'slug'
    ];

    // التواريخ (إن رغبت في استخدامها)
    protected $dates = ['created_at', 'updated_at'];

    public function images()
{
    return $this->hasMany(BonaProjectImage::class, 'project_id');
}


protected static function booted()
{
    static::creating(function ($project) {
        if (empty($project->slug)) {
            $project->slug = Str::slug($project->title) . '-' . uniqid();
        }
    });
}

 protected static function boot()
    {
        parent::boot();

        // عند إنشاء مشروع جديد
        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title) . '-' . time();
            }
        });

        // عند تعديل مشروع (إذا تغيّر العنوان)
        static::updating(function ($project) {
            if ($project->isDirty('title')) {   // اذا تغير العنوان
                $project->slug = Str::slug($project->title) . '-' . $project->id;
            }
        });
    }

}
