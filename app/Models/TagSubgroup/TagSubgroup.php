<?php

namespace App\Models\TagSubgroup;

use App\Models\Tag\Tag;
use App\Models\TagGroup\TagGroup;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagSubgroup extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'description',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'tag_group_id',
        'slug',
        'icon',
    ];

    public function tag()
    {
        return $this->hasMany(Tag::class);
    }

    public function tagGroup()
    {
        return $this->belongsTo(TagGroup::class);
    }
}
