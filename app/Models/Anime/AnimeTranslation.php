<?php

namespace App\Models\Anime;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'poster_path',
        'poster_colors',
        'seo_addition_id',
    ];
}
