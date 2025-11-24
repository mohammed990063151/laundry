<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BonaServiceDetail extends Model
{
    protected $fillable = [
        'bona_service_id',
        'title',
        'long_description',
        'image',
        'gallery',
        'features',
        'video_url',
        'sort_order'
    ];

    protected $casts = [
        'gallery' => 'array',
        'features' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(BonaService::class, 'bona_service_id');
    }
}
