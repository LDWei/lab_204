<div class="panel panel-default">
    <div class="panel-heading">
        提问/文章
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @if( count($posts) == 0 )
                <li class="list-group-item">
                        <div class="empty-block text-center">没有任何数据~~</div>
                </li>
            @else
            @foreach($posts as $index => $post)
            <li class="list-group-item">
                <a class="text" href="{{ route('articles.detail',$post->id) }}" title="{{$post->title}}">
                    {{{str_limit($post->title, '40')}}}
                </a>
                <span class="small">
                <span> ⋅ </span>
                {{$post->like}}点赞
                <span> ⋅ </span>
                9 回复
                <span> ⋅ </span>
                <span class="timeago popover-with-html" data-original-title="" title="">{{ $post->created_at }}</span>
                </span>
            </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
<style>
</style>