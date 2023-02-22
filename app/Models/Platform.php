<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'slug',
        'name',
    ];

    public function userHistory()
    {
        return $this->hasMany(UserHistory::class);
    }
}
