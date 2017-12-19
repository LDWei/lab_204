<li class="list-group-item">
    <a href="{{ route('user.page',$notification->data['id']) }}">{{ $notification->data['name'] }}</a>评论了您的文章
    <a href="{{ route('articles.detail',$notification->data['post_id']) }}">{{ \App\Post::find($notification->data['post_id'])->title}}</a>
    <span class="small">
    <span class="timeago popover-with-html" data-original-title="" title=""> ⋅ {{\Carbon\Carbon::parse($notification->created_at)->diffForHumans()  }}</span>
    </span>
</li>