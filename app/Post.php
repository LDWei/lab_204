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
        return $this->belongsTo('App\Cat','cat_id');
    }

    //十天内的格式化，十天前的直接原格式
    public function getCreatedAtAttribute($date)
    {
        if (Carbon::parse($date)->addDays(40) < Carbon::now()) {//如果现在时间大于文章发布时间加10天
            return Carbon::parse($date);//直接显示原格式
        }
        return Carbon::parse($date)->diffForHumans();//否则格式化时间
    }
}
