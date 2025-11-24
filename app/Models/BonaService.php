<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BonaService extends Model
{
    protected $fillable = ['badge','title','description','image','sort_order','slug'];

    public function details()
{
    return $this->hasMany(BonaServiceDetail::class, 'bona_service_id')->orderBy('sort_order');
}
protected static function booted()
{
    static::creating(function ($project) {
        if (empty($project->slug)) {
            $project->slug = Str::slug($project->title) . '-' . uniqid();
        }
    });
}


}


