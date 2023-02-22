<?php

namespace App\Models\Season;

use App\Models\Anime\Anime;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_id',
        'group_id',
        'number',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
}
