<?php

namespace App\Listeners;

use App\Events\PostView;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Session\Store;

class PostViewListener
{
    /**
     * Create the event listener.
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle the event.
     *
     * @param  PostView  $event
     * @return void
     */
    public function handle(PostView $event)
    {
        $post = $event->post;
        //先判断是否已经查看过
        if(!$this->hasViewedPost($post)){
            //保存到数据库
            //$post->increment('view_count');
            $post->view_count = $post->view_count + 1;
            $post->save();
            //看过之后保存到session
            $this->storeViewedPost($post);
        }
    }

    //文章最近是否被浏览过
    public function hasViewedPost($post)
    {
        return array_key_exists($post->id,$this->getViewedPost($post));
    }

    //如果浏览过则获取session存入的浏览记录
    public function getViewedPost($post)
    {
        return $this->session->get('viewed_post', []);
    }

    //最近第一次浏览 存入session
    public function storeViewedPost($post)
    {
        $key = 'viewed_post.' . $post->id;
        $this->session->put($key, time());
    }
}
