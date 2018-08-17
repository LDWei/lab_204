<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Notifications\PostVoteNotification;
class VotesController extends Controller
{
    //
    public function users($id)
    {
        $user = Auth::user();
        if($user->hasVotedFor($id)){
            return response()->json(['voted'=> true ]);
        }
        return response()->jon(['voted'=> false]);
    }

    public function vote($id){

        $post = Post::find($id);
        $postUser = $post->user;
        $voted = Auth::user()->voteFor($id);//当前用户点赞进来的文章
        //如果用户关注了另一个用户
        if(count($voted['attached'])>0){
            //可以去通知用户 修改用户的关注人数等数据
            if($postUser->id != Auth::user()->id){
                $postUser->notify(new PostVoteNotification($id));
                //用户未读消息加一
                $postUser->increment('message_count');
            }
            $post->increment('vote_count');
            return response()->json(['voted' => true,'user_id'=>Auth::user()->id,'user_avatar'=>Auth::user()->avatar]);
        }else{
            $post->decrement('vote_count');
            return response()->json(['voted' => false]);
        }
    }
}
