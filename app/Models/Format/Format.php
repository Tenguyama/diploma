<?php

namespace App\Models\Format;

use App\Models\LanguageVideoplayer;
use App\Models\SeoAddition;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
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

    public function languageVideoplayer()
    {
        return $this->hasMany(LanguageVideoplayer::class);
    }
}
