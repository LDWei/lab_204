<div class="panel panel-default">
    <div class="panel-heading">
        提问/文章
    </div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach($posts as $post)
            <li class="list-group-item">
                <a class="text" href="{{}}" title="">
                    {{$post->title}}
                </a>
                <span class="small">
                <span> ⋅ </span>
                {{$post->like}}点赞
                <span> ⋅ </span>
                9 回复
                <span> ⋅ </span>
                <span class="timeago popover-with-html" data-original-title="" title="">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
                </span>
            </li>
                @endforeach
        </ul>
    </div>
</div>
<style>
</style>