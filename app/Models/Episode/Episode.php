<?php

namespace App\Models\Episode;

use App\Models\Anime\Anime;
use App\Models\EpisodeImage;
use App\Models\EpisodeLanguage;
use App\Models\SeoAddition;
use App\Models\UserWatchHistory;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use HasFactory, Translatable, SoftDeletes;

    public $translatedAttributes = [
        'name',
        'description',
        'seo_addition_id',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_id',
        'number',
        'duration',
        'air_date',
        'is_filler',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function seoAddition()
    {
        return $this->belongsTo(SeoAddition::class);
    }

    public function episodeImage()
    {
        return $this->hasMany(EpisodeImage::class);
    }

    public function userWatchHistory()
    {
        return $this->hasMany(UserWatchHistory::class);
    }

    public function episodeLanguage()
    {
        return $this->hasMany(EpisodeLanguage::class);
    }
}
