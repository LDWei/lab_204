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
                <li><a href="index.html">Forum</a></li>
                <li><a href="category_list.html">Twitter Bootstrap</a></li>
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
                                <img src="assets/img/user-1.jpg" alt="" />
                                <span class="label label-danger">ADMIN</span>
                            </div>
                            <!-- end media -->
                            <!-- begin info-container -->
                            <div class="info-container">
                                <div class="post-user"><a href="#">Radomit Grigor</a> <small>SAYS</small></div>
                                <div class="post-content">
                                    {!!  MarkdownEditor::parse("$posts->content")  !!}
                                <div class="post-time">{{\Carbon\Carbon::parse($posts->created_at)->diffForHumans()}}</div>
                            </div>
                            </div>
                            <!-- end info-container -->
                        </li>

                        @include('user.partials.comments')
                    </ul>
                    <!-- end forum-list -->

                {{ $replays->links() }}

                    <!-- begin comment-section -->
                    <div class="comment-banner-msg">
                        Posting to the forum is only allowed for members with active accounts.
                        Please <a href="#">sign in</a> or <a href="#">sign up</a> to post.
                    </div>
                    <div class="panel panel-forum">
                        <div class="panel-heading">
                            <h4 class="panel-title">Comment</h4>
                        </div>
                        <div class="panel-body">
                            <form action="/" name="wysihtml5" method="POST">
                                <textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"></textarea>
                                <div class="m-t-10">
                                    <button type="submit" class="btn btn-theme">Post Comment <i class="fa fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end comment-section -->
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