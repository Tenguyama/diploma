<?php

namespace App\Models\RelatedType;

use App\Models\Related;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedType extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
    ];

    protected $guarded = ['id'];

    protected $fillable = [];

    public function related()
    {
        return $this->hasMany(Related::class);
    }
}
