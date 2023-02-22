<?php

namespace App\Models\Achievement;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'description',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'slug',
        'icon',
    ];

}
