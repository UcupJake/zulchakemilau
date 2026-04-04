<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'name',
        'badge',
        'image_url',
        'description',
        'specs',
    ];

    protected $casts = [
        'specs' => 'array',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
