<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_rating_id',
        'locale',
        'name',
        'body',
    ];

    public function animeRating()
    {
        return $this->belongsTo(AnimeRating::class);
    }

    public function reviewLike()
    {
        return $this->hasMany(ReviewLike::class);
    }
}
