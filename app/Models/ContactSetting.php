<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ContactSetting extends Model
{
    protected $fillable = [
        'title','subtitle','email','phone','whatsapp','address','map_embed'
    ];
}
