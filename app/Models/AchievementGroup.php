<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementGroup extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'achievement_ids' => 'array',
    ];

    protected $fillable = [
        'achievement_ids',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
