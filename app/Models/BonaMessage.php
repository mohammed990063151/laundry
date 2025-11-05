<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BonaMessage extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'subject', 'message'];
}

