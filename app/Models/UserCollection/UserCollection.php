<?php

namespace App\Models\UserCollection;

use App\Models\Anime\Anime;
use App\Models\SeoAddition;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCollection extends Model
{
    use HasFactory, Translatable, SoftDeletes;

    public $translatedAttributes = [
        'seo_addition_id',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'locale',
        'name',
        'description',
        'is_published',
    ];

    public function seoAddition()
    {
        return $this->belongsTo(SeoAddition::class);
    }

    public function anime()
    {
        return $this->belongsToMany(Anime::class);
    }

}
