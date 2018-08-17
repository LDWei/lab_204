<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    //
    protected $fillable = [
        'post_id','user_id','content','like','created_at','update_at',
    ];

    /**
     * 获取该评论所属的文章模型。
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    /**
     * 获取该评论所属的用户模型。
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * 获取该评论所属的文章模型。
     * @param $query $user_id
     */
    public function scopeWhose($query, $user_id)
    {
        return $query->where('user_id', '=', $user_id)->with('post');
    }


    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeWhoseComment($query, $post_id)
    {
        return $query->where('post_id', '=', $post_id)->with('user');
    }


//    public function scopeReply($query, $user_id,$post_id)
//    {
//        return $query->where(['user_id'=>$user_id,'post_id'=>$post_id])->orderBy('id');
//    }


    //时间全部格式化
    public function getCreatedAtAttribute($date)
    {
//        if (Carbon::parse($date)->addDays(40) < Carbon::now()) {//如果现在时间大于文章发布时间加10天
//            return Carbon::parse($date);//直接显示原格式
//        }
        return Carbon::parse($date)->diffForHumans();//否则格式化时间
    }
}
