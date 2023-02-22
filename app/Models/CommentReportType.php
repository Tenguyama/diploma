<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReportType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'slug',
    ];

    public function commentReport()
    {
        return $this->hasMany(CommentReport::class);
    }
}
