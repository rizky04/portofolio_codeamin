<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 'category', 'level', 'icon', 'sort_order', 'is_visible',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true)->orderBy('sort_order');
    }
}
