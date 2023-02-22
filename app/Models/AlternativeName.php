<?php

namespace App\Models;

use App\Models\Anime\Anime;
use App\Models\Character\Character;
use App\Models\Kind\Kind;
use App\Models\Status\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativeName extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_id',
        'name',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function character()
    {
        return $this->hasMany(Character::class);
    }

    public function status()
    {
        return $this->hasOne(Status::class);
    }

    public function kind()
    {
        return $this->hasOne(Kind::class);
    }
}
