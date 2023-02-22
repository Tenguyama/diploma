<?php

namespace App\Models\RestrictedRating;

use App\Models\Anime\Anime;
use App\Models\SeoAddition;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestrictedRating extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'hint',
        'seo_addition_id',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'slug',
        'value',
        'icon',
    ];

    public function seoAddition()
    {
        return $this->belongsTo(SeoAddition::class);
    }

    public function anime()
    {
        return $this->hasMany(Anime::class);
    }
}
