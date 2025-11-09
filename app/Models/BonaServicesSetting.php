<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BonaServicesSetting extends Model
{
    protected $fillable = [
        'hero_title','hero_subtitle','hero_background',
        'whyus_badge','whyus_title','whyus_text','whyus_image',
        'big_image',
        'cta_title','cta_subtitle','cta_button_text','cta_button_link','cta_background',
    ];
}

