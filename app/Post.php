<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'user_id','cat_id','view_count','like','status','created_at','update_at',
    ];

    /**
     * 获取该文章所属用户模型。
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * 获取这篇博文下的所有评论。
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * 获取该文章所属分类模型。
     */
    public function category()
    {
        return $this->belongsTo('App\Cat');
    }

    //时间格式化
    public function getCreatedAtAttribute($date)
    {
        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date);
        }
        return Carbon::parse($date)->diffForHumans();
    }
}
