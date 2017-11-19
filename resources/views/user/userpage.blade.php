@extends("layouts.nobgimg")
@section("content")
    <div class="container" style="padding: 40px;">
        <div class="container main-container ">
            <div class="users-show  row">
                <div class="col-md-3">
                    <div style="border-style: solid; border-width: 1px;border-color: #ccc">
                    <div class="box" style="padding: 10px;">
                        <div class="padding-sm user-basic-info">
                            <div style="margin: auto">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="image">
                                            <a href="https://laravel-china.org/users/16876/edit_avatar" class="popover-with-html" data-toggle="tooltip" data-placement="top" title="修改头像">
                                                <img class="media-object avatar-112 avatar img-thumbnail" src="https://dn-phphub.qbox.me/uploads/avatars/16876_1497095210.png?imageView2/1/w/200/h/200"></a>
                                        </div>
                                    </div>
                                    <div class="media-bottom">
                                        <h3 class="media-xs">
                                            passenger
                                        </h3>
                                        <div class="item">
                                            第 16876 位会员
                                        </div>
                                            <div class="item number">
                                                注册于 <span class="timeago popover-with-html" data-content="2017-06-10 19:46:48" data-original-title="" title="">5个月前</span>
                                            </div>
                                            <div class="item number">
                                                活跃于 <span class="timeago popover-with-html" data-content="2017-11-16 16:49:57" data-original-title="" title="">6分钟前</span>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="follow-info row">
                                <div class="col-xs-4">
                                    <a class="counter" href="https://laravel-china.org/users/16876/followers">0</a>
                                    <a class="text" href="https://laravel-china.org/users/16876/followers">关注者</a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="counter" href="https://laravel-china.org/users/16876/replies">5</a>
                                    <a class="text" href="https://laravel-china.org/users/16876/replies">讨论</a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="counter" href="https://laravel-china.org/users/16876/articles">1</a>
                                    <a class="text" href="https://laravel-china.org/users/16876/topics">文章</a>
                                </div>
                            </div>
                            <hr>
                            <div class="topic-author-box text-center">
                                <ul class="list-inline"></ul>
                            </div>

                            <a class="btn btn-primary btn-block" href="https://laravel-china.org/users/16876/edit" id="user-edit-button">
                                <i class="fa fa-edit"></i> 编辑个人资料
                            </a>
                        </div>
                    </div>
                </div>
                    <hr>
                    <hr>

                    <div class="box text-center">

                        <div class="padding-sm user-basic-nav">
                            <ul class="list-group">
                                <a href="https://laravel-china.org/users/16876/articles" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-headphones"></i> Ta 发布的文章</li>
                                </a>

                                <a href="https://laravel-china.org/users/16876/topics" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-list-ul"></i> Ta 发布的话题</li>
                                </a>

                                <a href="https://laravel-china.org/users/16876/replies" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-comment"></i> Ta 发表的回复</li>
                                </a>

                                <a href="https://laravel-china.org/users/16876/following" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-eye"></i> Ta 关注的用户</li>
                                </a>

                                <a href="https://laravel-china.org/users/16876/votes" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-thumbs-up"></i> Ta 赞过的话题</li>
                                </a>

                            </ul>
                        </div>

                    </div>

                    {{--<div class="box text-center">--}}
                        {{--<p style="margin-bottom: 10px;margin-top: 10px;"><a href="https://laravel-china.org/topics/1531">客户端</a> 登录二维码</p>--}}
                        {{--<img style="height: 180px; width=180px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAIAAAAiOjnJAAAACXBIWXMAAA7EAAAOxAGVKw4bAAADm0lEQVR4nO3dQWojMRRAwXHw/Y9sZm8QRKAXSXbVNplOj/3oxUdSP/5d4vV6LbnOz8/PR17/NHfcJdcRFglhkRAWCWGREBYJYZF4jn6wau4ya3ZOc81cZ/I+Zz//076vO74VriMsEsIiISwSwiIhLBLCIjGcY42smhvVc5ddc51Z9X3u+r48sUgIi4SwSAiLhLBICIuEsEhMz7FOM5qv1Pv7Rmbv51N91/+WPyMsEsIiISwSwiIhLBLCInH9HGvVPsRd86dd87aaJxYJYZEQFglhkRAWCWGREBaJ6TnWLfOVVXOp289n33Zu1pa/yscTFglhkRAWCWGREBYJYZEYzrG+bR/cyKr1W/V6r9O+r7Puho8hLBLCIiEsEsIiISwSwiLxvGV9Va3e37fq+rd8X55YJIRFQlgkhEVCWCSERUJYJB6z/6A+V/2WfX+7zpev3z+47HOYviP4BWGREBYJYZEQFglhkRAWieEcq943V8+3Rm5/n+Bp68OG119yFXgjLBLCIiEsEsIiISwSwiLx2LVeqp5L3WLX51B/j55YJIRFQlgkhEVCWCSERUJYJKbXY806bT3WKrfsZ5y9zsjs9c/6tvgYwiIhLBLCIiEsEsIiISwS2/YVztq1z3HXPspVdp3X5YlFQlgkhEVCWCSERUJYJIRFYvi+wtPmVavsuv6uz2fXeWCeWCSERUJYJIRFQlgkhEVCWCS27Stc5bR1YLPXmbXrvYrTv/+Le4NpwiIhLBLCIiEsEsIiISwS+Xqs0+Y3t/zdWcedZ7biZuCdsEgIi4SwSAiLhLBICIvEcD3WSD2nqfcznvZ+w13n1zsfiysJi4SwSAiLhLBICIuEsEg8TpvrzNp1jtesr1vHtuQq8EZYJIRFQlgkhEVCWCSEReK5a64za3pf2yXvDVx1nV3r5Ia/H90HX05YJIRFQlgkhEVCWCSEReI5+sEt85563dWq+zltX2T+uS25CrwRFglhkRAWCWGREBYJYZGYfl/hrvcAnrbe6LR9i6t4XyFHExYJYZEQFglhkRAWCWGRGK7HusWqudeqfYuzdr1nsF4H5olFQlgkhEVCWCSERUJYJIRF4vo51q5zs3bNvUZOm4d5YpEQFglhkRAWCWGREBYJYZGYnmOd9n7DXe/723Uu16p9f/UczhOLhLBICIuEsEgIi4SwSAiLxPB8rNOcdk76rvnZSH3emDkWRxAWCWGREBYJYZEQFglhkfgPUwxvaR85orMAAAAASUVORK5CYII="><br><br><form method="POST" action="https://laravel-china.org/users/regenerate_login_token" accept-charset="UTF-8">--}}
                            {{--<input name="_token" value="drbAksPrR8u2OAXtSxo29zJtQ05BFnlJnconVT1d" type="hidden"><div style="margin-bottom: 8px;color: #999;font-size: 0.9em;">登录失败请点击</div>--}}
                            {{--<input class="btn btn-sm btn-default" style="margin-bottom: 13px;" id="topic-create-submit" value="重新生成" type="submit">--}}
                        {{--</form>--}}

                    {{--</div>--}}
                </div>

                <div class="main-col col-md-9 left-col">
                    <div class="panel panel-default" style="border-style: solid; border-width: 1px;border-color: #ccc">
                        <div class="panel-heading">
                            专栏文章
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="https://laravel-china.org/articles/6550/php4-callback-style" title="swoole 中 4 种回调函数风格">
                                        swoole 中 4 种回调函数风格
                                    </a>
                                    <span class="meta">
                                        <a href="https://laravel-china.org/php_knowledge" title="php基础知识">
                                          php基础知识
                                        </a>
                                        <span> ⋅ </span>
                                        10 点赞
                                        <span> ⋅ </span>
                                        9 回复
                                        <span> ⋅ </span>
                                        <span class="timeago popover-with-html" data-content="2017-10-29 18:38:12" data-original-title="" title="">18天前</span>
                                      </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default" style="border-style: solid; border-width: 1px;border-color: #ccc">
                        <div class="panel-heading">
                            最近话题
                        </div>
                        <div class="panel-body">
                            <div class="empty-block">没有任何数据~~</div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="border-style: solid; border-width: 1px;border-color: #ccc">
                        <div class="panel-heading">
                            最新评论
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="https://laravel-china.org/topics/2965/it-is-best-to-use-the-markdown-open-source-support-graphical-user-interface-using-the-markdown-editor-tutorial" title="最好用的 Markdown 开源在线支持图形界面的 Markdown 编辑器使用教程" class="remove-padding-left">
                                        最好用的 Markdown 开源在线支持图形界面的 Markdown 编辑器使用教程
                                    </a>
                                    <span class="meta">
         at <span class="timeago popover-with-html" title="" data-content="2017-11-16 11:19:15" data-original-title="2017-11-16 11:19:15">6小时前</span>
      </span>
                                    <div class="reply-body markdown-reply content-body">
                                        <p><a href="https://laravel-china.org/users/4556">@chenhua</a> 学习过您的视频</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://laravel-china.org/topics/2965/it-is-best-to-use-the-markdown-open-source-support-graphical-user-interface-using-the-markdown-editor-tutorial" title="最好用的 Markdown 开源在线支持图形界面的 Markdown 编辑器使用教程" class="remove-padding-left">
                                        最好用的 Markdown 开源在线支持图形界面的 Markdown 编辑器使用教程
                                    </a>
                                    <span class="meta">
         at <span class="timeago popover-with-html" title="" data-content="2017-11-16 10:47:02" data-original-title="2017-11-16 10:47:02">6小时前</span>
      </span>
                                    <div class="reply-body markdown-reply content-body">
                                        <p><a href="https://laravel-china.org/users/4556">@chenhua</a> 我要怎么感谢你  解决了困扰我好几天的问题  哈哈哈哈</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://laravel-china.org/articles/6550/php4-callback-style" title="swoole 中 4 种回调函数风格" class="remove-padding-left">
                                        swoole 中 4 种回调函数风格
                                    </a>
                                    <span class="meta">
         at <span class="timeago popover-with-html" title="" data-content="2017-10-31 11:58:06" data-original-title="2017-10-31 11:58:06">16天前</span>
      </span>

                                    <div class="reply-body markdown-reply content-body">
                                        <p><a href="https://laravel-china.org/users/6324">@蜗牛</a> 谢谢提醒，php中实现回调都是调用了call_user_xx的函数，这是swoole中的用法。</p>
                                    </div>
                                </li>
                                <li class="list-group-item">

                                    <a href="https://laravel-china.org/articles/6550/php4-callback-style" title="swoole 中 4 种回调函数风格" class="remove-padding-left">
                                        swoole 中 4 种回调函数风格
                                    </a>
                                    <span class="meta">
         at <span class="timeago popover-with-html" title="" data-content="2017-10-30 20:36:13" data-original-title="2017-10-30 20:36:13">17天前</span>
      </span>
                                    <div class="reply-body markdown-reply content-body">
                                        <p><a href="https://laravel-china.org/users/13322">@NicolaBonelli</a> 不好意思 PHP  4种回调函数风格</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <a href="https://laravel-china.org/articles/6550/php4-callback-style" title="swoole 中 4 种回调函数风格" class="remove-padding-left">
                                        swoole 中 4 种回调函数风格
                                    </a>
                                    <span class="meta">
         at <span class="timeago popover-with-html" title="" data-content="2017-10-30 13:37:21" data-original-title="2017-10-30 13:37:21">17天前</span>
      </span>
                                    <div class="reply-body markdown-reply content-body">
                                        <p><a href="https://laravel-china.org/users/5903">@to2False</a> 是的，在swoole文档里看到的，觉得可以补充一下知识就摘过来啦~</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
