<?php

namespace App\Models\Tag;

use App\Models\SeoAddition;
use App\Models\TagSubgroup\TagSubgroup;
use App\Models\User;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'hint',
        'description',
        'seo_addition_id',
    ];

    protected $guarded = ['id'];

    protected $fillable = [
        'tag_subgroup_id',
        'icon',
        'spoiler',
    ];

    public function seoAddition()
    {
        return $this->belongsTo(SeoAddition::class);
    }

    public function tagSubgroup()
    {
        return $this->belongsToMany(TagSubgroup::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

//    public function scopeGetLocales()
//    {
//        $id = $this->id;
//        //dd($id);
//        // дістати локаль елемента по його id , для озвучок (1 озвучка -> 1 локаль)
//        return DB::table('tag_translations')
//            ->where('tag_id', $id)
//            ->first();
//    }
}
