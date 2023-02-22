<?php

namespace App\Models;

use App\Models\Episode\Episode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpisodeImage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'episode_id',
        'path',
        'width',
        'height',
        'colors',
    ];

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
}
