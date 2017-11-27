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
     *
     * @return \Illuminate\Http\Response
     */
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


    /*
     * 文章编写页面
     * @param $id
     * @return view with $category
     */
    public function editArticle($id)
    {

        $category = Cat::get()->all();
        return view('user.articles',compact('category'));
    }

    /*
     * 验证并保存文章
     * @param $request
     * @return
     */
    public function store($id,StoreQuestionRequest $request)
    {
        //验证以后不要写在这里  另外写一个request 里面写验证规则，然后注入依赖即可。这样避免把控制器写的复杂
        $post = new Post;
        $post->user_id = $id;
        $post->title = $request->get('title');
        $post->cat_id = $request->get('cat');
        $post->content = $request->get('test-editormd');
        if($request->get('subject'))
        {
            $post->status = $request->get('subject');
            if($post->save())
                flash('保存草稿成功')->success()->important();
        }
        else{
            if($post->save())
                flash('发布成功')->success()->important();
            else
                flash('发布失败')->error()->important();
        }
        return redirect()->route('user.page',$id);
    }


    public function show($id)
    {
        return view('user.userpage');
        dd($id);
        //$id = Auth::user()->id;//当前用户id
        $user = User::findOrFail($id);//获取当前用户信息
        $posts = User::find($id)->posts->where('status',0);//获取用户的文章
        $comments = User::find($id)->comments;//获取用户的所有评论
        $follows =$user->following;//获取用户关注者

    }

    /*
     * 用户资料编辑页面
     * 根据用户ID 查询出用户的信息返回给前端
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
