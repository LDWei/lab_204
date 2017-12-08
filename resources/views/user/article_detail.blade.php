@extends("layouts.nobgimg")
@section("content")
    <!-- begin page-title -->
    <div class="page-title has-bg">
        <!-- begin bg-cover -->
        <div class="bg-cover">
            <img src="{{ URL::asset('assets/img/cover3.jpg')}}" alt="" />
        </div>
        <!-- end bg-cover -->
        <!-- begin container -->
        <div class="container">
            <!-- begin breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="index.html">技术问答</a></li>
                <li><a href="category_list.html">{{ $cat->name }}</a></li>
                <li class="active">&nbsp;</li>
            </ul>
            <!-- end breadcrumb -->
            <h1>{{$posts->title}}</h1>
        </div>
        <!-- end container -->
    </div>
    <!-- end page-title -->

    <!-- begin content -->
    <div class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-9 -->
                <div class="col-md-13">
                    <!-- begin forum-list -->
                    <ul class="forum-list forum-detail-list">
                        <li>
                            <!-- begin 头像 -->
                            <div class="media">
                                <a href="{{route('user.page',$user->id)}}"><img src="{{url($user->avatar)}}" alt="{{ $user->name }}" /></a>
                                @if($user->id == 0)
                                    <span class="label label-inverse">普通用户</span>
                                @else
                                    <span class="label label-inverse">管理员</span>
                                @endif
                            </div>
                            <!-- end media -->
                            <!-- begin info-container -->
                            <div class="info-container">
                                <div class="post-user"><a href="{{route('user.page',$user->id)}}">{{$user->name}}</a> <small>SAYS</small></div>
                                <div class="post-content">
                                    {!!  MarkdownEditor::parse("$posts->content")  !!}
                                <div class="post-time">{{ $posts->created_at }}
                                    <div class="article-meta text-center">
                                        <i class="fa fa-clock-o"></i> <abbr title="" class="timeago popover-with-html" data-content="2017-11-29 15:11:38" data-original-title="2017-11-29 15:11:38">9天前</abbr>
                                        ⋅
                                        <i class="fa fa-eye"></i> 3
                                        ⋅
                                        <i class="fa fa-thumbs-o-up"></i> 0
                                        ⋅
                                        <i class="fa fa-comments-o"></i> 0

                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- end info-container -->
                        </li>

                        @include('user.partials.comments')
                    </ul>
                    <!-- end forum-list -->

                {{ $replays->links() }}
                    <div class="votes-container panel panel-default padding-md">

                        <div class="panel-body vote-box text-center">

                            <div class="btn-group">

                                <a data-ajax="post" href="javascript:void(0);" data-url="https://laravel-china.org/topics/7028/upvote" title="" data-content="点赞相当于收藏，可以在个人页面的「赞过的话题」导航里查看" id="up-vote" class="vote btn btn-primary btn-inverted popover-with-html " data-original-title="Up Vote">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    点赞

                                </a>

                            </div>

                            <div class="voted-users">

                                <div class="user-lists">

                                </div>
                                <div class="vote-hint">
                                    成为第一个点赞的人吧 <img title=":bowtie:" alt=":bowtie:" class="emoji" src="https://dn-phphub.qbox.me/assets/images/emoji/bowtie.png" align="absmiddle">
                                </div>

                                <a class="voted-template" href="" data-userid="" style="display:none">
                                    <img class="img-thumbnail avatar avatar-middle" src="" style="width:48px;height:48px;"></a>
                            </div>

                        </div>
                    </div>


                    @if(Auth::check())
                        <div class="alert alert-dismissable alert-info">
                        <i class="fa fa-info" aria-hidden="true"></i> &nbsp;&nbsp;请勿发布不友善或者负能量的内容。与人为善，比聪明更重要！
                    </div>
                    <div class="panel panel-forum">

                        <div class="panel-heading">
                            <h4 class="panel-title">发表评论</h4>
                        </div>

                        <div class="panel-body">
                            <form action="/" name="wysihtml5" method="POST">
                                <textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text support Markdown ..." rows="12"></textarea>
                                <div class="m-t-10">
                                    <button type="submit" class="btn btn-theme">回复<i class="fa fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end comment-section -->
                        @else
                        <div class="comment-banner-msg">
                        只允许登录后评论，请
                        <a href="{{ route('login') }}">登录</a> 或者 <a href="{{ route('register') }}">注册</a>.
                        </div>
                        @endif
                </div>
                <!-- end col-9 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
    <style>
        .post-content img{
            max-width: 100%;
            box-sizing: border-box;
            border: 1px solid #ddd;
            box-shadow: 0 0 30px #ccc;
            -moz-box-shadow: 0 0 30px #ccc;
            -webkit-box-shadow: 0 0 30px #ccc;
            margin-bottom: 30px;
            margin-top: 10px;
        }
    </style>
    <script>
    </script>

@endsection