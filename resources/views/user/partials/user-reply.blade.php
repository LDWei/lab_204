@if(Auth::check())
    <div class="alert alert-dismissable alert-info">
        <i class="fa fa-info" aria-hidden="true"></i> &nbsp;&nbsp;请勿发布不友善或者负能量的内容。与人为善，比聪明更重要！
    </div>
    <div class="panel panel-forum">

        <div class="panel-heading">
            <h4 class="panel-title">发表评论</h4>
        </div>
        <div class="panel-body">
            <form action="{{ route('article.replay',$posts->id) }}" name="replay" method="POST">
                {{ csrf_field() }}
                <textarea class="textarea form-control" id="wysihtml5" name="text" placeholder="请用Markdown语法书写;-),代码片段粘贴时注意使用高亮语法。" rows="12"></textarea>
                <input type="hidden" name="uid" value="{{ $user->id }}">
                <div class="m-t-10">
                    <button type="submit" class="btn btn-theme">回复<i class="fa fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- end comment-section -->
@else
    <div class="comment-banner-msg">
        只允许登录后回复，请
        <a href="{{ route('login') }}">登录</a> 或者 <a href="{{ route('register') }}">注册</a>.
    </div>
@endif