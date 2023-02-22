<?php

namespace App\Models\Genre;

use App\Models\Anime\Anime;
use App\Models\SeoAddition;
use App\Models\User;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'description',
        'seo_addition_id',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'icon',
    ];

    public function seoAddition()
    {
        return $this->belongsTo(SeoAddition::class);
    }

    public function anime()
    {
        return $this->belongsToMany(Anime::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
