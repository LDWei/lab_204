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
                    <div class="item">
                        注册于 <span class="timeago popover-with-html" data-content="2017-06-10 19:46:48" data-original-title="" title="">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</span>
                    </div>
                    <div class="item">
                        活跃于 <span class="timeago popover-with-html" data-content="2017-12-08 19:09:31" data-original-title="" title="">{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans()}}</span>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="topic-author-box text-center">
            <div class="col-xs-4">
                <a class="counter"  href="">{{ count($following) }}</a>
                <br>
                <a class="text" href="">关注者</a>
            </div>
            <div class="col-xs-4">
                <a class="counter" href="">{{ count($comments) }}</a>
                <br>
                <a class="text" href="">评论</a>
            </div>
            <div class="col-xs-4">
                <a class="counter" href="">{{ count($posts) }}</a>
                <br>
                <a class="text" href="">提问/文章</a>
            </div>
        </div>
        <p></p>
        <hr>
        <br>
        <hr>
        <div class="box text-center">
            <ul class="list-inline">
                <li class="popover-with-html" data-content="Seaony" data-original-title="" title="">
                    <a href="https://github.com/Seaony" target="_blank">
                        <i class="fa fa-github-alt"></i> GitHub
                    </a>
                </li>
                <li class="popover-with-html" data-content="seaony.github.io" data-original-title="" title="">
                    <a href="http://seaony.github.io" rel="nofollow" target="_blank" class="url">
                        <i class="fa fa-globe"></i> Website
                    </a>
                </li>

                <li class="popover-with-html" data-content="Zy1390" data-original-title="" title="">
                    <i class="fa fa-users"></i> 公司</li>

                <li class="popover-with-html" data-content="Chongqing" data-original-title="" title="">
                    <i class="fa fa-map-marker"></i> 城市</li>

            </ul>
        </div>
        <hr>

        @if(Auth::check()&&$user->id == Auth::user()->id)
        <a class="btn btn-primary btn-block" href="https://laravel-china.org/users/16876/edit" id="user-edit-button">
            <i class="fa fa-edit"></i> 编辑个人资料
        </a>
            @else
            <a data-method="post" class="btn btn-warning btn-block" href="javascript:void(0);" data-url="https://laravel-china.org/users/follow/17036" id="user-edit-button" style="cursor:pointer;">
                <i class="fa fa-plus"></i> 关注 Ta

                <form action="https://laravel-china.org/users/follow/17036" method="POST" style="display:none">
                    <input name="_method" value="post" type="hidden">
                    <input name="_token" value="L4BoHc8MRlbednkTvw3DWEJLU2fsGLR67NWWQizL" type="hidden">
                </form>
            </a>
            <a class="btn btn-default btn-block" href="https://laravel-china.org/messages/to/17036">
                <i class="fa fa-envelope-o"></i> 发私信
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

    .item{
        margin: 7px 0;
    }

</style>