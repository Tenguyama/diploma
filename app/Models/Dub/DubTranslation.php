<?php

namespace App\Models\Dub;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DubTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'description',
        'seo_addition_id',
    ];
}
