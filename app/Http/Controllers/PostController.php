<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Events\PostView;
use App\Notifications\PostReplyNotification;
use App\User;
use App\Post;
use App\Comment;
use Auth;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validate;
use App\Http\Requests\StoreQuestionRequest;
use League\HTMLToMarkdown\HtmlConverter;
use App\Http\Controllers\Parsedown;
use Illuminate\Support\Facades\Event;
use App\Http\Requests\ReplyRequest;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['detail']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param $request \StoreQuestionRequest $id
     * @return void
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


    /*
    * 文章详情页
    * @param $id
     * return view
    */
    public function detail($id)
    {
        $posts = Post::find($id);
        $whos = $posts->whoVotes()->get();//获取文章点赞的用户
        //dd($whos);
        $user = $posts->user;
        $cat = $posts->category;
        $replays = Comment::WhoseComment($id)->paginate(15);
        Event::fire(new PostView($posts));
        return view('user.article_detail',compact('user','posts','replays','cat','whos'));
    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage
     * @param $post,$user
     * @return \Illuminate\Http\Response
     */
    public function destroy($post,Request $reuqest)
    {
        $uid = $reuqest->uid;
        if(Auth::user()->id == $uid){
            Comment::WhoseComment($post)->delete();
            Post::destroy($post);
            flash('删除成功')->success()->important();
            return redirect()->route('user.page',$uid);//这样做返回的时候又要查询一次？
        }
        else
            return back();
    }

    public function replyDel($id){
        if(Comment::destroy($id)){
            return 1;
        }else{
            return 0;
        }
    }

    public function replay($post,ReplyRequest $request)
    {
        //$converter = new HtmlConverter();
        //$html = $request->text;
        //$markdown = $converter->convert($html);
        //dd($markdown);
        $fromUser = $request->uid;
        $who = Post::find($post);
        $toUser = $who->user;
        $comment = new Comment;
        $comment->post_id = $post;
        $comment->user_id = $fromUser;
        $comment->content = $request->text;
        if($comment->save() && $toUser->id != Auth::user()->id  ){//自己给自己评论就不通知了
            $toUser->notify( new PostReplyNotification($post) );
            $toUser->increment('message_count');
        }

        flash('回复成功')->success()->important();
        return back();
    }

    public function rewrite($post)
    {
        $category = Cat::get()->all();
        return view('user.rewrite',compact('category'));
    }


    public function articleList()
    {
        return view('display.list');
    }
}
