<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BonaProjectImage extends Model
{
    protected $fillable = ['project_id', 'image'];

    public function project()
    {
        return $this->belongsTo(BonaProject::class, 'project_id');
    }
}

