<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'tagline', 'bio', 'photo', 'cv_file',
        'email', 'whatsapp', 'github', 'linkedin', 'location',
    ];
}
