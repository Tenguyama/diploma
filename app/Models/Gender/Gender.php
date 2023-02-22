<?php

namespace App\Models\Gender;

use App\Models\User;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
    ];

    protected $guarded = ['id'];

    protected $fillable = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
