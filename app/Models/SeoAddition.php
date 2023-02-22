<?php

namespace App\Models;

use App\Models\Anime\Anime;
use App\Models\Character\Character;
use App\Models\Collection\Collection;
use App\Models\Country\Country;
use App\Models\Dub\Dub;
use App\Models\Episode\Episode;
use App\Models\Format\Format;
use App\Models\Genre\Genre;
use App\Models\Kind\Kind;
use App\Models\Period\Period;
use App\Models\RestrictedRating\RestrictedRating;
use App\Models\Source\Source;
use App\Models\Status\Status;
use App\Models\Studio\Studio;
use App\Models\Tag\Tag;
use App\Models\UserCollection\UserCollection;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoAddition extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $guarded = ['id'];

    protected $fillable = [
        'slug',
        'title',
        'description',
        'image',
        'image_alt',
        'social_title',
        'social_description',
        'social_type',
        'social_image',
    ];

    public function tag()
    {
        return $this->hasOne(Tag::class);
    }

    public function period()
    {
        return $this->hasOne(Period::class);
    }

    public function status()
    {
        return $this->hasOne(Status::class);
    }

    public function kind()
    {
        return $this->hasOne(Kind::class);
    }

    public function format()
    {
        return $this->hasOne(Format::class);
    }

    public function restrictedRatind()
    {
        return $this->hasOne(RestrictedRating::class);
    }

    public function genre()
    {
        return $this->hasOne(Genre::class);
    }

    public function country()
    {
        return $this->hasOne(Country::class);
    }

    public function studio()
    {
        return $this->hasOne(Studio::class);
    }

    public function dub()
    {
        return $this->hasOne(Dub::class);
    }

    public function source()
    {
        return $this->hasOne(Source::class);
    }

    public function anime()
    {
        return $this->hasOne(Anime::class);
    }

    public function episode()
    {
        return $this->hasOne(Episode::class);
    }

    public function character()
    {
        return $this->hasOne(Character::class);
    }

    public function collection()
    {
        return $this->hasOne(Collection::class);
    }

    public function userCollection()
    {
        return $this->hasOne(UserCollection::class);
    }
}
