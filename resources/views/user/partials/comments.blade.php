@foreach($replays as $repaly)
<li>
    <!-- begin media -->
    <div class="media" style="margin-left: 40px">
        <a href="{{route('user.page',$repaly->user->id)}}"><img src="{{url($repaly->user->avatar)}}" alt="" /></a>
        @if($repaly->user->id == 0)
        <span class="label label-inverse">普通用户</span>
            @else
            <span class="label label-inverse">管理员</span>
            @endif
    </div>
    <!-- end media -->

    <!-- begin info-container -->
    <div class="info-container" style="margin-left: 120px;padding-bottom: 30px;">
        <div class="post-user"><a href="{{route('user.page',$repaly->user->id)}}">{{$repaly->user->name}}</a> <small>SAYS</small></div>
        <div class="post-content">
            {!! Parsedown::instance()->setMarkupEscaped(true)->text($repaly->content) !!}
        </div>
        <div class="post-time">{{ $repaly->created_at }}</div>

        <span class="operate fa-pull-right" >
            @if(Auth::check()&&$user->id == Auth::user()->id)
                <a id="reply-delete" data-ajax="delete" href="javascript:;" onclick="reply_del(this,{{$repaly->id}})"  title="删除">
                <i class="fa fa-trash-o"></i>
                </a>
                <span>·</span>
            @endif
            <a class="comment-vote" data-ajax="post" id="reply-up-vote-17240" href="javascript:void(0);" data-url="https://laravel-china.org/replies/17240/vote" title="点赞">
            <i class="fa fa-thumbs-o-up" style="font-size:14px;"></i> <span class="vote-count">10</span>
        </a>
        <span>·</span>
        <a class="fa fa-reply" href="javascript:void(0)" onclick="replyOne('{{$repaly->user->name}}');" title="回复{{$repaly->user->name}}"></a>
        </span>
    </div>
    <!-- end info-container -->
</li>
    @endforeach
<script type="text/javascript">
    function reply_del(obj,id){
        {{--$.post('{{ action('PostController@replyDel') }}',{"_token":'{{csrf_token()}}',"id":id},--}}
        $.post("/reply_del/"+id,{"_token":'{{csrf_token()}}'},
            function(data){
                //判断是否成功
                if(data==1){
                    //移除数据
                    $(obj).parent().parent().parent().remove();
                    //数量计算
                    tot=Number($('#tot').html());
                    $('#tot').html(--tot);
                }else{
                    alert('删除失败');
                }
            }
        );
    }
</script>

