<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;

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


    //用户关注的人
    public function followers()
    {
        return $this->belongsToMany(self::class,'follows','follower_id','followed_id')->withTimestamps();
    }

    //用户的粉丝
    public function following()
    {
        return $this->belongsToMany(self::class,'follows','followed_id','follower_id')->withTimestamps();
    }

    //关注用户
    public function followThisUser($user)
    {
        return $this->followers()->toggle($user);
    }


    public function messages()
    {
        return $this->hasMany(Message::class,'from_user_id');
    }

    //判断是否关注了对方
    public function hasFollowed($user)
    {
        return !!$this->followers()->where('followed_id',$user)->count();//!!返回布尔值0就返回false
    }


    public function votes()
    {
        return $this->belongsToMany(Post::class,'votes')->withTimestamps();
    }

    //点赞文章
    public function voteFor($post)
    {
        return $this->votes()->toggle($post);
    }

    //用户是否已经点赞
    public function hasVotedFor($post)
    {
        return !!$this->votes()->where('post_id',$post)->count();
    }
}
