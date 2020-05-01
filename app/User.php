<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Follow;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logo_url',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * モデルの配列形態に追加するアクセサ
     *
     * @var array
     */
    protected $appends = ['is_following'];

    /**
     * judge auth user is following
     *
     * @return bool true | false
     */
    public function getIsFollowingAttribute(): bool
    {
        return Follow::existsByToUserIdAndFromUserId($this->id, \Auth::user()->id);
    }

    // relation
    public function posts()
    {
        return $this->hasMany(\App\Post::class, 'user_id', 'id');
    }

    public function following()
    {
        return $this->hasMany('App\Follow', 'from_user_id');
    }

    public function followers()
    {
        return $this->hasMany('App\Follow', 'to_user_id');
    }
}
