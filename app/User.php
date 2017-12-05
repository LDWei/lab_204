<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var 
     */
    protected $fillable = [
        'id','name', 'email', 'password','real_name','sex','avatar','tell','qq','city','job','admin','selfWeb','gitHub','weChat'
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
     * 获取用户下的所有文章。
     */
    public function posts()
    {
        return $this->hasMany('App\Post','user_id');
    }
    /**
     * 获取用户所有评论。
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
