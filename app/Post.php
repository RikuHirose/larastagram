<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'description',
        'img_url',
    ];

    // relation
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
