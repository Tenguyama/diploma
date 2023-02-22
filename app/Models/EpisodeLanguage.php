<?php

namespace App\Models;

use App\Models\Episode\Episode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpisodeLanguage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'language_id',
        'episode_id',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }

    public function languageVideoplayer()
    {
        return $this->hasMany(LanguageVideoplayer::class);
    }
}
