<ul class="forum-list forum-detail-list">
    <li>
        <!-- begin 头像 -->
        <div class="media">
            <a href="{{route('user.page',$user->id)}}"><img src="{{url($user->avatar)}}" alt="{{ $user->name }}" /></a>
            @if($user->admin == 0)
                <span class="label label-inverse">普通用户</span>
            @else
                <span class="label label-inverse">管理员</span>
            @endif
        </div>
        <!-- end media -->
        <!-- begin info-container -->
        <div class="info-container" style="background-color:#fff;">
            <div class="post-user"><a href="{{route('user.page',$user->id)}}">{{$user->name}}</a></div>
            <div class="post-content">
                {!!  MarkdownEditor::parse("$posts->content")  !!}
                <br>
                <hr>

                <div class="article-meta text-center">
                    <i class="fa fa-clock-o"></i> <span  class="timeago popover-with-html" >{{ $posts->created_at }}</span>
                    ⋅
                    <i class="fa fa-eye"></i> {{ $posts->view_count }}
                    ⋅
                    <i class="fa fa-thumbs-o-up"></i> 0
                    ⋅
                    <i class="fa fa-comments-o"></i> <span class="reply-num" id="reply-num">{{ count($replays) }}</span>
                </div>
                @if(Auth::check()&&$user->id == Auth::user()->id)
                    <div class="article-meta text-right">
                        <div class="pull-right actions">
                            <a data-method="delete" id="delete" href="javascript:void(0);"  class="admin  popover-with-html"  style="cursor:pointer;">
                                <i class="fa fa-trash-o"></i>
                                <form id="deleteForm" action="{{ route('user.article_del',$posts->id) }}" method="get" style="display:none">
                                    <input name="_method" value="delete" type="hidden">
                                    {{ csrf_field() }}
                                    <input name="uid" value="{{ $user->id }}" type="hidden">
                                </form>
                            </a>
                            &nbsp
                            <a id="topic-edit-button" href="https://laravel-china.org/articles/6550/edit" data-content="编辑" class="admin  popover-with-html no-pjax" data-original-title="" title="编辑">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!-- end info-container -->
    </li>
</ul>