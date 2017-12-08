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
                        <svg width="14" height="16" viewBox="0 0 14 14" class="Icon Icon--male" aria-hidden="true" style="height: 16px; width: 14px;fill:#9fadc7;top: 2px;position: relative;">
                            <g><path d="M3.025 10.64c-1.367-1.366-1.367-3.582 0-4.95 1.367-1.366 3.583-1.366 4.95 0 1.367 1.368 1.367 3.584 0 4.95-1.367 1.368-3.583 1.368-4.95 0zm10.122-9.368c-.002-.414-.34-.75-.753-.753L8.322 0c-.413-.002-.746.33-.744.744.002.413.338.75.75.752l2.128.313c-.95.953-1.832 1.828-1.832 1.828-2.14-1.482-5.104-1.27-7.013.64-2.147 2.147-2.147 5.63 0 7.777 2.15 2.148 5.63 2.148 7.78 0 1.908-1.91 2.12-4.873.636-7.016l1.842-1.82.303 2.116c.003.414.34.75.753.753.413.002.746-.332.744-.745l-.52-4.073z" fill-rule="evenodd"></path></g></svg>
                    </div>
                    <div class="item">
                        第{{ $user->id }}位会员
                    </div>
                    <div class="item number">
                        注册于 <span class="timeago popover-with-html" data-content="2017-06-10 19:46:48" data-original-title="" title="">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</span>
                    </div>
                    <div class="item number">
                        活跃于 <span class="timeago popover-with-html" data-content="2017-12-08 19:09:31" data-original-title="" title="">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</span>
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
</style>