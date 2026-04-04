<?php

namespace App\Models;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subtitle',
        'slug',
    ];

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
