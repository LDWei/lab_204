<div class="panel panel-default">
    <div class="panel-heading">
        提问/文章
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @if(empty($posts))
                <li class="list-group-item">
                    暂无数据哦~
                </li>
            @else
            @foreach($posts as $post)
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