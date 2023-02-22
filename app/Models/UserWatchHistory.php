<?php

namespace App\Models;

use App\Models\Anime\Anime;
use App\Models\Episode\Episode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWatchHistory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'anime_id',
        'episode_id',
        'progress_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
}
