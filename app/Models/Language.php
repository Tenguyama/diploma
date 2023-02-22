<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory, Translatable;

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'locale',
        'icon',
        'kodik_id',
    ];

    public function episodeLanguage()
    {
        return $this->hasMany(EpisodeLanguage::class);
    }
}
