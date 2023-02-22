<?php

namespace App\Models;

use App\Models\Anime\Anime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeBackdrop extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_id',
        'path',
        'width',
        'height',
        'colors',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
}
