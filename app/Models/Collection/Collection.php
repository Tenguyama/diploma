<?php

namespace App\Models\Collection;

use App\Models\Anime\Anime;
use App\Models\SeoAddition;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use HasFactory, Translatable, SoftDeletes;

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
        return $this->belongsToMany(Anime::class);
    }
}
