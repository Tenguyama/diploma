<?php

namespace App\Models;

use App\Models\Anime\Anime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_id',
        'logo_path',
        'name',
        'priority',
    ];

    public function anime()
    {
        return $this->belongsToMany(Anime::class);
    }
}
