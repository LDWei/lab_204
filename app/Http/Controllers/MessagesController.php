<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Auth;
use App\User;

class MessagesController extends Controller
{
    //


    public function store()
    {

    }

    public function showMessages($id)
    {
        return view('user.messages.messages');
    }


    //用户所有私信页面：查询用户所有对话 并且只显示每一个对话的最后一句
    public function messages()
    {
        $id = Auth::user()->id;
        $messages = User::find($id)->messages()->get();//当前用户收到的所有私信
        $messages = Message::find(1)->fromUser()->get();
        dd($messages);
        return view('user.messages.allMessages');
    }
    //对话详细页面：查询当前用户与对方的所有对话内容，时间由近到远排列
}
