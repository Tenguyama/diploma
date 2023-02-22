<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeVideo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_video_kind_id',
        'name',
        'url',
        'image_url',
        'embed_url',
    ];

    public function animeVideoKind()
    {
        return $this->belongsTo(AnimeVideoKind::class);
    }

}
