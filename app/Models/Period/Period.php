<?php

namespace App\Models\Period;

use App\Models\Anime\Anime;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'description',
        'seo',
    ];

    protected $guarded = ['id'];

    protected $fillable = [];

    public function anime()
    {
        return $this->hasMany(Anime::class);
    }
}
