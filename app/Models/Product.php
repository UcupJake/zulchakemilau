<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'section_id',
        'title',
        'description',
        'features',
        'capacity',
        'coverage',
        'timer',
        'image_url'
    ];

    // public function section()
    // {
    //     return $this->belongsTo(Section::class);
    // }
}
