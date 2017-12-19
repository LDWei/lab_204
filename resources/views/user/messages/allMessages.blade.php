@extends("layouts.nobgimg")
@section('content')
    <div class="container main-container " style="padding: 40px;">
        <div class="messages">
            @include('user.messages.left')
            <div class="col-md-9  left-col ">
                <div class="panel panel-default padding-md" style="border-style: solid; border-width: 1px;border-color: #ccc">
                    <div class="panel-body ">
                        <h3>
                            </i>我的消息</h3>
                    </div>
                    <div class="panel-body remove-padding-horizontal notification-index">
                        <ul class="list-group row">
                            <li class="list-group-item media " style="margin-top: 0px;">
                                <div class="avatar pull-left">
                                    <a href="https://laravel-china.org/users/8236">
                                        <img class="media-object img-thumbnail avatar" alt="JellyBean" src="https://dn-phphub.qbox.me/uploads/avatars/8236_1482210847.jpeg?imageView2/1/w/100/h/100" style="width:48px;height:48px;"></a>
                                </div>
                                <div class="infos">
                                    <div class="media-heading">
                                        我发送给
                                        <a href="https://laravel-china.org/users/8236">
                                            JellyBean
                                        </a>
                                        <span class="meta">
                                 ⋅ 于 ⋅ <span class="timeago popover-with-html" data-content="1小时前" data-original-title="" title="">1小时前</span>
                            </span>：
                                    </div>
                                    <div class="media-body markdown-reply content-body">
                                        <p>谢谢您，问题已经解决。</p>
                                    </div>
                                    <div class="message-meta">
                                        <p>
                                            <a href="https://laravel-china.org/messages/799" class="normalize-link-color ">
                                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                                查看对话
                                            </a>
                                        </p>
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
                                        我发送给
                                        <a href="https://laravel-china.org/users/8236">
                                            JellyBean
                                        </a>
                                        <span class="meta">
                                 ⋅ 于 ⋅ <span class="timeago popover-with-html" data-content="1小时前" data-original-title="" title="">1小时前</span>
                            </span>：
                                    </div>
                                    <div class="media-body markdown-reply content-body">
                                        <p>谢谢您，问题已经解决。</p>
                                    </div>
                                    <div class="message-meta">
                                        <p>
                                            <a href="https://laravel-china.org/messages/799" class="normalize-link-color ">
                                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                                查看对话
                                            </a>
                                        </p>
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