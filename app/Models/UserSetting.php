<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'is_auto_next',
        'is_auto_play',
        'is_auto_skip',
        'is_dub',
        'is_romaji',
        'is_private',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
