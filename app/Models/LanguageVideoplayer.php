<?php

namespace App\Models;

use App\Models\Format\Format;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageVideoplayer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'videoplayer_id',
        'episode_language_id',
        'format_id',
        'url',
        'start_intro',
        'end_intro',
        'start_ending',
    ];

    public function videoplayer()
    {
        return $this->belongsTo(Videoplayer::class);
    }

    public function episodeLanguage()
    {
        return $this->belongsTo(EpisodeLanguage::class);
    }

    public function format()
    {
        return $this->belongsTo(Format::class);
    }

}
