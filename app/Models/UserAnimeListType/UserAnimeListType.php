<?php

namespace App\Models\UserAnimeListType;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnimeListType extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'slug',
    ];

//    public function ????(){
//        до чого саме????
//    }
}
