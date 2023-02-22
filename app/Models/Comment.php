<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'user_id',
        'locale',
        'body',
        'parent_id',
        'is_spoiler',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // як описати pfrent_id ??????????


    // commentable_type ??????????
    // commentable_id ??????????

    public function commentReport()
    {
        return $this->hasMany(CommentReport::class);
    }

    public function commentLike()
    {
        return $this->hasMany(CommentLike::class);
    }

}
