<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\NewUserFollowNotification;

class FollowController extends Controller
{
    //
    public function followUser($id){
        $userToFollow = User::find($id);
        $follow = Auth::user()->followThisUser($id);//当前用户关注传入进来的用户
        //如果用户关注了另一个用户
        if(count($follow['attached'])>0){
            //可以去通知用户 修改用户的关注人数等数据
            $userToFollow->notify(new NewUserFollowNotification());
            $userToFollow->increment('follower_count');
            //用户未读消息加一
            $userToFollow->increment('message_count');
//            return response()->json(['followed' => true]);
            return 1;
        }
            $userToFollow->decrement('follower_count');
    }
}
