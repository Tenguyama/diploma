<?php

namespace App\Models\TagGroup;

use App\Models\TagSubgroup\TagSubgroup;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagGroup extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'slug',
    ];

    public function tagSubgroup()
    {
        return $this->hasMany(TagSubgroup::class);
    }
}
