<div class="box" style="padding: 10px;">
    <div class="padding-sm user-basic-info">
        <div style="margin: auto">
            <div class="media">
                <div class="media-left">
                    <div class="image">
                        @if($user->id == Auth::user()->id)
                        <a href="https://laravel-china.org/users/16876/edit_avatar" class="popover-with-html" data-toggle="tooltip" data-placement="top" title="修改头像">
                            @endif
                            <img class="media-object avatar-112 avatar img-thumbnail" src="https://dn-phphub.qbox.me/uploads/avatars/16876_1497095210.png?imageView2/1/w/200/h/200"></a>
                    </div>
                </div>
                <div class="media-bottom">
                    <h3 class="media-xs">
                        {{ $user->name }}
                    </h3>
                    <div class="item">
                        第 {{ $user->id }} 位会员
                    </div>
                    <div class="item number">
                        注册于 <span class="timeago popover-with-html" data-content="{{ $user->created_at }}" data-original-title="" title="">5个月前</span>
                    </div>
                    <div class="item number">
                        活跃于 <span class="timeago popover-with-html" data-content="{{ $user->update_at }}" data-original-title="" title="">6分钟前</span>
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
            <ul class="list-inline">
                <li>hahah</li>
            </ul>
        </div>
        @if($user->id == Auth::user()->id)
        <a class="btn btn-primary btn-block" href="https://laravel-china.org/users/16876/edit" id="user-edit-button">
            <i class="fa fa-edit"></i> 编辑个人资料
        </a>
            @endif
    </div>
</div>
</div>
<hr>
<hr>