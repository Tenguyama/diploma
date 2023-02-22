<?php

namespace App\Models\Anime;

use App\Models\AlternativeName;
use App\Models\AnimeBackdrop;
use App\Models\AnimeRating;
use App\Models\Character\Character;
use App\Models\Collection\Collection;
use App\Models\Country\Country;
use App\Models\Dub\Dub;
use App\Models\Episode\Episode;
use App\Models\ExternalLink;
use App\Models\Genre\Genre;
use App\Models\Kind\Kind;
use App\Models\Notification;
use App\Models\Period\Period;
use App\Models\Provider;
use App\Models\Related;
use App\Models\Season\Season;
use App\Models\SeoAddition;
use App\Models\Similar;
use App\Models\Source\Source;
use App\Models\Status\Status;
use App\Models\Studio\Studio;
use App\Models\Tag\Tag;
use App\Models\User;
use App\Models\UserCollection\UserCollection;
use App\Models\UserHistory;
use App\Models\UserWatchHistory;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anime extends Model
{
    use HasFactory, Translatable, SoftDeletes;

    public $translatedAttributes = [
        'name',
        'description',
        'poster_path',
        'poster_colors',
        'seo_addition_id',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'tmdb_id',
        'shikimori_id',
        'native_name',
        'romaji_name',
        'kind-id',
        'status_id',
        'period_id',
        'restricted_rating_id',
        'avg_duration',
        'episodes',
        'first_air_date',
        'last_air_date',
        'source_id',
        'shikimori_score',
        'tmdb_score',
        'imdb_score',
        'is_published',
    ];

    public function kind()
    {
        return $this->belongsTo(Kind::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public function source()
    {
        return $this->belongsTo(Source::class);
    }

    public function seoAddition()
    {
        return $this->belongsTo(SeoAddition::class);
    }

    public function season()
    {
        return $this->hasOne(Season::class);
    }

    public function related()
    {
        return $this->hasOne(Related::class);
    }

    public function animeBackdrop()
    {
        return $this->hasMany(AnimeBackdrop::class);
    }

    public function alternativeName()
    {
        return $this->hasMany(AlternativeName::class);
    }

    public function externalLink()
    {
        return $this->hasMany(ExternalLink::class);
    }

    public function similar()
    {
        return $this->hasMany(Similar::class);
    }

    public function episode()
    {
        return $this->hasMany(Episode::class);
    }

    public function provider()
    {
        return $this->belongsToMany(Provider::class);
    }

    public function animeRating()
    {
        return $this->hasMany(AnimeRating::class);
    }

    public function notification()
    {
        return $this->hasMany(Notification::class);
    }

    public function userHistory()
    {
        return $this->hasMany(UserHistory::class);
    }

    public function userWatchHistory()
    {
        return $this->hasMany(UserWatchHistory::class);
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function country()
    {
        return $this->belongsToMany(Country::class);
    }

    public function studio()
    {
        return $this->belongsToMany(Studio::class);
    }

    public function dub()
    {
        return $this->belongsToMany(Dub::class);
    }

    public function character()
    {
        return $this->belongsToMany(Character::class);
    }

    public function collection()
    {
        return $this->belongsToMany(Collection::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function userCollection()
    {
        return $this->belongsToMany(UserCollection::class);
    }
}
