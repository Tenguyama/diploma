<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Achievement\Achievement;
use App\Models\Anime\Anime;
use App\Models\Gender\Gender;
use App\Models\Genre\Genre;
use App\Models\Role\Role;
use App\Models\Tag\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'login',
        'email',
        'name',
        'password',
        'avatar_path',
        'backdrop_path',
        'google_path',
        'telegram_id',
        'discord_id',
        'tiktok_id',
        'token',
        'gender_id',
        'description',
        'telegram_url',
        'discord_url',
        'xp',
        'status_icon',
        'status_text',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];


// хз це вже було
//    /**
//     * The attributes that should be hidden for serialization.
//     *
//     * @var array<int, string>
//     */
//    protected $hidden = [
//        'password',
//        'remember_token',
//    ];
//
//    /**
//     * The attributes that should be cast.
//     *
//     * @var array<string, string>
//     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function userSetting()
    {
        return $this->hasOne(UserSetting::class); // ?????????
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function commentLike()
    {
        return $this->hasMany(CommentLike::class);
    }

    public function commentReport()
    {
        return $this->hasMany(CommentReport::class);
    }

    public function animeRating()
    {
        return $this->hasMany(AnimeRating::class);
    }

    public function reviewLike()
    {
        return $this->hasMany(ReviewLike::class);
    }

    public function notification()
    {
        return $this->hasMany(Notification::class);
    }

    public function userWatchHistory()
    {
        return $this->hasMany(UserWatchHistory::class);
    }

    public function userHistory()
    {
        return $this->hasMany(UserHistory::class);
    }

    public function anime()
    {
        return $this->belongsToMany(Anime::class);
    }

    public function achievement()
    {
        return $this->belongsToMany(Achievement::class);
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }

}
