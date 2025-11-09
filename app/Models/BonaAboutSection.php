<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BonaAboutSection extends Model
{
    protected $fillable = [
        'hero_title', 'hero_description', 'hero_image',
        'about_title', 'about_text', 'about_image',
        'vision_text', 'mission_text', 'values_text',
        'story_title', 'story_text', 'story_image',
        'team_section', 'partners_section',
    ];
}

