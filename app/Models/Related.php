<?php

namespace App\Models;

use App\Models\Anime\Anime;
use App\Models\RelatedType\RelatedType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Related extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'anime_id',
        'group_id',
        'related_type_id',
    ];

    protected $primaryKey = ['anime_id ', 'group_id '];

    public $incrementing = false;

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function relatedType()
    {
        return $this->belongsTo(RelatedType::class);
    }

}
