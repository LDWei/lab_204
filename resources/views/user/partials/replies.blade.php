<div class="panel panel-default">
    <div class="panel-heading">
        最新评论
    </div>

    <div class="panel-body">
        <ul class="list-group">
            @if( count($posts) == 0 )
                <li class="list-group-item">
                    <div class="empty-block text-center">没有任何数据~~</div>
                </li>
            @else
            @foreach($comments as $index => $comment)
            <li class="list-group-item">
                <a href="{{route('articles.detail',$comment->post->id)}}" title="{{{$comment->post->title}}}" class="remove-padding-left">
                    {{{$comment->post->title}}}
                </a>
                <span class="small">
         at <span class="timeago" title="{{ $comment->created_at }}">{{ $comment->created_at }}</span>
      </span>
                <div class="reply-body markdown-reply content-body">
                    {!! $comment->content !!}
                </div>
            </li>
                @endforeach
                @endif
        </ul>
    </div>
</div>