<?php

namespace App\Models;

use App\Models\Anime\Anime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Similar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_id',
        'anime_similar_id',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
    //
    // animeSimilar - дублює попередній чи одного досить?
    //
}
