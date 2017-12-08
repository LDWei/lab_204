<div class="box" style="padding: 10px;">
    <div class="padding-sm user-basic-info">
        <div style="margin: auto">
            <div class="media">
                <div class="media-left">
                    <div class="image" >
                        @if(Auth::check()&&$user->id == Auth::user()->id)
                        <a href="https://laravel-china.org/users/16876/edit_avatar" class="popover-with-html" data-toggle="tooltip" data-placement="top" title="修改头像">
                        @endif
                            <img style="border-radius: 50%;" class="media-object avatar-112 avatar img-thumbnail" src="{{ url($user->avatar) }}"></a>
                    </div>
                </div>
                <div class="media-body">
                    <h3 class="media-heading">
                        {{ $user->name }}
                    </h3>
                    <div class="item">
                        第{{ $user->id }}位会员
                    </div>
                    <div class="item number">
                        注册于 <span class="timeago popover-with-html" data-content="2017-06-10 19:46:48" data-original-title="" title="">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</span>
                    </div>
                    <div class="item number">
                        活跃于 <span class="timeago popover-with-html" data-content="2017-12-08 19:09:31" data-original-title="" title="">{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans()}}</span>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="follow-info row">
            <div class="col-xs-4">
                <a class="counter"  href="">0</a>
                <a class="text" href="">关注者</a>
            </div>
            <div class="col-xs-4">
                <a class="counter" href="">5</a>
                <a class="text" href="">讨论</a>
            </div>
            <div class="col-xs-4">
                <a class="counter" href="">1</a>
                <a class="text" href="">文章</a>
            </div>
        </div>
        <hr>
        <div class="topic-author-box text-center">
            <ul class="list-inline">
                <li>hahah</li>
            </ul>
        </div>
        @if(Auth::check()&&$user->id == Auth::user()->id)
        <a class="btn btn-primary btn-block" href="https://laravel-china.org/users/16876/edit" id="user-edit-button">
            <i class="fa fa-edit"></i> 编辑个人资料
        </a>
            @endif
    </div>
</div>
</div>
<hr>
<hr>
<style>
    .media-object avatar-112 avatar img-thumbnail{

    }
    .counter{
        font-size: 25px;
    }
</style>