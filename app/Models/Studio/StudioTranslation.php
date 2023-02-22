<?php

namespace App\Models\Studio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudioTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'description',
        'seo_addition_id',
    ];
}
