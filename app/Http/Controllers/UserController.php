<?php

namespace App\Http\Controllers;

use App\Cat;
use App\User;
use App\Post;
use App\Comment;
use Auth;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validate;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\InfoRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }


    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 用户首页包括个人信息，所有文章，所有评论
     * @param $id
     * @return view
     */
    public function show($id)
    {
        //$id = Auth::user()->id;//当前用户id
        $user = User::findOrFail($id);//获取当前用户信息
        $posts = $user->posts()->where('status',0)->orderBy('created_at', 'desc')->get();//获取用户可公开的文章
        //不加查询条件可以直接$posts->$user->posts;
        //dd($posts);
        $comments = Comment::whose($user->id)->recent()->limit(20)->get();//获取用户的所有评论和评论所对应的的文章
        //$follows =$user->following;//获取用户关注者
        return view('user.userpage',compact('posts','comments','user'));
    }

    /*
     * 用户资料编辑页面
     * 根据用户ID 查询出用户的信息返回给前端
     * @return view
     */
    public function showEdit()
    {
        $id = Auth::id();
        $infos = User::where('id',$id)->get();
        return view('user.useredit',compact('infos'));
    }

    /*
     * save the info from user edit
     * InfoRequest.php来验证输入
     * @param $id \InfoRequest $request
     */
    public function saveEdit($id, InfoRequest $request)
    {
        $user = User::findOrFail($id);
        //$this->authorize('saveEdit',$user);//用户授权
        if($request->performUpdate($user))
        flash('修改成功')->success()->important();
        else
            flash('修改失败')->error()->important();
        return redirect(route('user.edit_page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
