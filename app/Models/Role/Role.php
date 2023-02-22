<?php

namespace App\Models\Role;

use App\Models\User;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'slug',
        'can_post_anime',
        'can_',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
