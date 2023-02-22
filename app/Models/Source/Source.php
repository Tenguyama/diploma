<?php

namespace App\Models\Source;

use App\Models\Anime\Anime;
use App\Models\SeoAddition;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'description',
        'seo_addition_id',
    ];

    protected $guarded = ['id'];

    protected $fillable = [];

    public function seoAddition()
    {
        return $this->belongsTo(SeoAddition::class);
    }

    public function anime()
    {
        return $this->hasMany(Anime::class);
    }
}
