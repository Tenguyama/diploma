<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReport extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'comment_id',
        'user_id',
        'comment_report_type_id',
        'body',
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentReportType()
    {
        return $this->belongsTo(CommentReportType::class);
    }

}
