@extends("layouts.nobgimg")
@section('content')
    <div class="container main-container " style="padding: 40px;">
        <div class="messages">
            @include('user.messages.left')
            <div class="col-md-9  left-col ">
                <div class="panel panel-default padding-md" style="border-style: solid; border-width: 1px;border-color: #ccc">
                    <div class="panel-body ">
                            <div><a href="https://laravel-china.org/messages" class="normalize-link-color"><i class="fa fa-arrow-left" aria-hidden="true"></i> 返回</a></div>
                            <br><div>
                                <p>发私信给 <a href="https://laravel-china.org/users/8236" class="">JellyBean</a> ：</p>
                            </div>

                            <form class="form-horizontal" method="POST" action="https://laravel-china.org/messages" accept-charset="UTF-8">
                                <input type="hidden" name="_token" value="iBIc8PCSTUzic6uAiQHVzclMEHjmBMqxO5MzD5LK"><input name="recipient_id" type="hidden" value="8236"><input name="thread_id" type="hidden" value="799"><div class="form-group">
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="3" name="message" cols="50" id="reply_content" required="" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                    </div>
                                    <div class="col-sm-4 help-block">
                                        <ul>
                                            <li>可以使用 Markdown</li>
                                            <li>支持黏贴上传图片</li>
                                            <li>支持 emoji 表情</li>
                                        </ul>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> 发送</button>

                            </form>

                            <hr>
                            <ul class="list-group row">
                                <li class="list-group-item media " style="margin-top: 0px;">
                                    <div class="avatar pull-left">
                                        <a href="https://laravel-china.org/users/16876">
                                            <img class="media-object img-thumbnail avatar" alt="passenger" src="https://dn-phphub.qbox.me/uploads/avatars/16876_1513424362.png?imageView2/1/w/100/h/100" style="width:48px;height:48px;"></a>
                                    </div>

                                    <div class="infos">

                                        <div class="media-heading">

                                            我
                                            ：
                                        </div>

                                        <div class="media-body markdown-reply content-body">
                                            <p>谢谢您，问题已经解决。</p>
                                        </div>

                                        <div>
                                            <p><span class="timeago popover-with-html" data-content="2017-12-19 18:29:13" data-original-title="" title="">1小时前</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item media " style="margin-top: 0px;">
                                    <div class="avatar pull-left">
                                        <a href="https://laravel-china.org/users/8236">
                                            <img class="media-object img-thumbnail avatar" alt="JellyBean" src="https://dn-phphub.qbox.me/uploads/avatars/8236_1482210847.jpeg?imageView2/1/w/100/h/100" style="width:48px;height:48px;"></a>
                                    </div>

                                    <div class="infos">

                                        <div class="media-heading">

                                            <a href="https://laravel-china.org/users/8236">
                                                JellyBean
                                            </a>
                                            ：
                                        </div>

                                        <div class="media-body markdown-reply content-body">
                                            <p>NewMessageNotification 接受一个array参数就行</p>
                                        </div>

                                        <div>
                                            <p><span class="timeago popover-with-html" data-content="2017-12-18 23:03:25" data-original-title="" title="">21小时前</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item media " style="margin-top: 0px;">
                                    <div class="avatar pull-left">
                                        <a href="https://laravel-china.org/users/8236">
                                            <img class="media-object img-thumbnail avatar" alt="JellyBean" src="https://dn-phphub.qbox.me/uploads/avatars/8236_1482210847.jpeg?imageView2/1/w/100/h/100" style="width:48px;height:48px;"></a>
                                    </div>

                                    <div class="infos">

                                        <div class="media-heading">

                                            <a href="https://laravel-china.org/users/8236">
                                                JellyBean
                                            </a>
                                            ：
                                        </div>

                                        <div class="media-body markdown-reply content-body">
                                            <p>比如可以像这样</p>
                                            <pre class=" language-php"><code class="  language-php"><span class="token variable">$message</span> <span class="token operator">=</span> <span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">message</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">create</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
            <span class="token string">'to_user_id'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token function">request</span><span class="token punctuation">(</span><span class="token string">'user'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
            <span class="token string">'from_user_id'</span><span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token function">user</span><span class="token punctuation">(</span><span class="token string">'api'</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">id</span><span class="token punctuation">,</span>
            <span class="token string">'body'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token function">request</span><span class="token punctuation">(</span><span class="token string">'body'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
            <span class="token string">'dialog_id'</span><span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token variable">$fromUserId</span><span class="token punctuation">.</span><span class="token variable">$toUserId</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">)</span>
 <span class="token variable">$message</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">toUser</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">notify</span><span class="token punctuation">(</span><span class="token keyword">new</span> <span class="token class-name">NewMessageNotification</span><span class="token punctuation">(</span><span class="token variable">$message</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>
                                        </div>

                                        <div>
                                            <p><span class="timeago popover-with-html" data-content="2017-12-18 23:02:54" data-original-title="" title="">21小时前</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item media " style="margin-top: 0px;">
                                    <div class="avatar pull-left">
                                        <a href="https://laravel-china.org/users/16876">
                                            <img class="media-object img-thumbnail avatar" alt="passenger" src="https://dn-phphub.qbox.me/uploads/avatars/16876_1513424362.png?imageView2/1/w/100/h/100" style="width:48px;height:48px;"></a>
                                    </div>

                                    <div class="infos">

                                        <div class="media-heading">

                                            我
                                            ：
                                        </div>

                                        <div class="media-body markdown-reply content-body">
                                            <p>您好，想请教您一个问题，用户在评论一篇文章后文章的作者如何收到通知呢？<br>
                                                我现在做到这一步了，评论后A用户能够通知到B用户，但是我不知道怎么把文章的信息通过<code>data</code>数组传递过去。希望您能指点一下</p>
                                        </div>

                                        <div>
                                            <p><span class="timeago popover-with-html" data-content="2017-12-17 20:36:03" data-original-title="" title="">2天前</span></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection