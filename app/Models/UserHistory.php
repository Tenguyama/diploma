<?php

namespace App\Models;

use App\Models\Anime\Anime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_id',
        'historiable_id',
        'hestoriable_type',
        'user_id',
        'platform_id',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    /// morph ??
}
