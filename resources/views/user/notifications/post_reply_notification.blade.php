<li class="list-group-item">
    <a href="{{ route('user.page',$notification->data['id']) }}">{{ $notification->data['name'] }}</a>评论了您的文章
    <a href="{{ route('articles.detail',$notification->data['post_id']) }}">{{ \App\Post::find($notification->data['post_id'])->title}}</a>
</li>