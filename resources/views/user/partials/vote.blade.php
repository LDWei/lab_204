<div class="votes-container panel panel-default padding-md" style="border-style: solid; border-width: 1px;border-color: #ccc";>

    <div class="panel-body vote-box text-center">

        <div class="btn-group">

            <a data-ajax="post" id="vote" href="javascript:;" onclick="vote(this,{{ $posts->id }})" data-url="" title=""  id="up-vote" class="vote btn btn-primary" data-original-title="Up Vote">
                <i  class="fa fa-thumbs-up" aria-hidden="true"></i>
                {{ Auth::user()->hasVotedFor($posts->id) ? '已赞': '点赞'}}
            </a>
        </div>
        <div class="voted-users">
            @if( $posts->vote_count == 0 )
                <div class="vote-hint">
                成为第一个点赞的人吧 <img title=":bowtie:" alt=":bowtie:" class="emoji" src="https://dn-phphub.qbox.me/assets/images/emoji/bowtie.png" align="absmiddle">
                </div>
            @else
                <div class="voted-users">
                    <div class="user-lists">
                        @foreach($whos as $who)
                            <a href="{{ route('user.page',$who->id) }}" data-userid="{{ $who->name }}">
                                <img class="img-thumbnail avatar avatar-middle" src="{{ url($who->avatar) }}" style="width:48px;height:48px;"></a>
                        @endforeach
                    </div>
                    <a class="voted-template" href="" data-userid="" style="display:none">
                        <img class="img-thumbnail avatar avatar-middle" src="" style="width:48px;height:48px;"></a>
                </div>
            @endif
            <a class="voted-template" href="" data-userid="" style="display:none">
                <img class="img-thumbnail avatar avatar-middle" src="" style="width:48px;height:48px;"></a>
        </div>
    </div>
</div>
<style>
    .img-thumbnail
    {
        border-radius:50%;
        padding: 2px;
        margin: 4px;
    }
    .voted-users
    {
        margin-top: 20px;
    }
</style>
<script>
    function vote(obj,posts_id){
        $.get("/vote/" + posts_id,
        function (data) {
            var num=Number($('#vote-num').html());
            if(data.voted){
                $(obj).html('已赞');
                $('#vote-num').html(++num);
            }
            else{
                $(obj).html('点赞')
                $('#vote-num').html(--num);
            }
        }
        );
    }
</script>