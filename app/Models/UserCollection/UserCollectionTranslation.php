<?php

namespace App\Models\UserCollection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCollectionTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'seo_addition_id',
    ];
}
