<div class="box" style="padding: 10px;background-color:#fff;">
    <div class="padding-sm user-basic-info">
        <div style="margin: auto">
            <div class="media">
                <div class="media-left">
                    <div class="image" >
                        @if( Auth::check() && $user->id == Auth::user()->id)
                        <a href="{{ route('user.avatar_edit') }}" class="popover-with-html" data-toggle="tooltip" data-placement="top" title="修改头像">
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
                        注册于 <span class="timeago popover-with-html" data-content="2017-06-10 19:46:48" data-original-title="" title="">{{ $user->created_at->diffForHumans() }}</span>
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
                <a class="counter" id="follower_count"  href="">{{ $user->follower_count }}</a>
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

        @if( Auth::check() && $user->id == Auth::user()->id)
        <a class="btn btn-primary btn-block" href="{{ route('user.edit_page') }}" id="user-edit-button">
            <i class="fa fa-edit"></i> 编辑个人资料
        </a>
            @elseif(Auth::check())
            <a  class="btn btn-{{ Auth::user()->hasFollowed($user->id) ? 'default' : 'warning' }} btn-block" href="javascript:void(0);" onclick="follow(this,{{$user->id}})"  id="user-edit-button" style="cursor:pointer;">
                <i class="fa {{ Auth::user()->hasFollowed($user->id) ? 'fa-minus' : 'fa-plus'}}"></i> {{ Auth::user()->hasFollowed($user->id) ? '已关注' : '关注 Ta' }}
            </a>
            <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">发私信</button>
        @endif
    </div>
</div>
</div>
<hr>
<hr>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">发送私信</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
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
<script>
    function follow(obj,fedid){
        $.get("/followed/"+fedid,{"_token":'{{csrf_token()}}'},
            //体现回调函数
            function(data){
                var num=Number($('#follower_count').html());
                if(data){
                 $(obj).html('已关注');
                 $('#follower_count').html(++num);
                }else{
                    $(obj).html('关注 Ta');
                    $('#follower_count').html(--num);
                }
            }
        );
    }
</script>