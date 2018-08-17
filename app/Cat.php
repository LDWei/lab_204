<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    //
    protected $fillable = [
        'id','name',
    ];
    /**
     * 获取分类下的所有文章。
     */
    public function all_posts()
    {
        return $this->hasMany('App\Post');
    }

}
