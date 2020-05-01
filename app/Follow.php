<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'to_user_id',
        'from_user_id'
    ];

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $toUserId
     * @param int $fromUserId
     *
     * @return Follow
     */
    public function scopeFindByToUserIdAndFromUserId($query, int $toUserId, int $fromUserId): Follow
    {
        return $query
        ->where('to_user_id', $toUserId)
        ->where('from_user_id', $fromUserId)
        ->first();
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $toUserId
     * @param int $fromUserId
     *
     * @return bool
     */
    public function scopeExistsByToUserIdAndFromUserId($query, int $toUserId, int $fromUserId): bool
    {
        return $query
        ->where('to_user_id', $toUserId)
        ->where('from_user_id', $fromUserId)
        ->exists();
    }

    public function toUser()
    {
        return $this->belongsTo('App\User', 'to_user_id');
    }

    public function fromUser()
    {
        return $this->belongsTo('App\User', 'from_user_id');
    }
}
