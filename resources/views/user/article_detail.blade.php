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
                    <!-- begin pagination -->
                    <div class="text-right">
                        <ul class="pagination m-t-0 m-b-15">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="text"><span>...</span></li>
                            <li><a href="#">10</a></li>
                            <li class="right"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- end pagination -->

                    <!-- begin forum-list -->
                    <ul class="forum-list forum-detail-list">
                        <li>
                            <!-- begin media -->
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
                        <li>
                            <!-- begin media -->
                            <div class="media">
                                <img src="assets/img/user-2.jpg" alt="" />
                                <span class="label label-inverse">USER</span>
                            </div>
                            <!-- end media -->
                            <!-- begin info-container -->
                            <div class="info-container">
                                <div class="post-user"><a href="#">Hagano</a> <small>SAYS</small></div>
                                <div class="post-content">
                                    Curabitur et tempus risus. Aenean et tortor pretium ligula elementum blandit. Aliquam in nibh vitae ligula molestie tristique nec quis augue.
                                </div>
                                <div class="post-time">5 hours ago</div>
                            </div>
                            <!-- end info-container -->
                        </li>
                        <li>
                            <!-- begin media -->
                            <div class="media">
                                <img src="assets/img/user-3.jpg" alt="" />
                                <span class="label label-primary">STAFF</span>
                            </div>
                            <!-- end media -->
                            <!-- begin info-container -->
                            <div class="info-container">
                                <div class="post-user"><a href="#">Cruz Erwann</a> <small>SAYS</small></div>
                                <div class="post-content">
                                    Sed lacinia nec odio eu maximus!
                                </div>
                                <div class="post-time">5 hours ago</div>
                            </div>
                            <!-- end info-container -->
                        </li>
                        <li>
                            <!-- begin media -->
                            <div class="media">
                                <img src="assets/img/user-4.jpg" alt="" />
                                <span class="label label-inverse">USER</span>
                            </div>
                            <!-- end media -->
                            <!-- begin info-container -->
                            <div class="info-container">
                                <div class="post-user"><a href="#">Boyce</a> <small>SAYS</small></div>
                                <div class="post-content">
                                    Aliquam sit amet justo accumsan, pulvinar purus vel, aliquet dolor. Cras tempus magna sit amet est sagittis, a egestas ligula fringilla.
                                    Nunc volutpat metus non turpis cursus faucibus. Aliquam molestie arcu et ipsum placerat, et porta orci euismod. <br /><br />
                                    Nam sed magna at turpis imperdiet ornare. Maecenas tincidunt iaculis ligula quis ultrices. Nunc id elit vel nulla efficitur ultrices in at nunc.
                                    Fusce imperdiet urna vitae lectus aliquet lobortis.<br /><br />
                                    Aenean non felis non leo dignissim egestas id id tellus. Nulla at elit sed lectus suscipit tempus.
                                    Sed non tellus nunc. Curabitur metus ipsum, luctus sed mi at, ullamcorper laoreet tortor.
                                    Sed nec sem fringilla erat consectetur vestibulum et rutrum augue. Mauris non ultrices velit. <br /><br />
                                    Duis rutrum turpis sed ipsum auctor blandit. Phasellus iaculis at augue id commodo. Praesent euismod vel nisl sed eleifend.
                                    Vestibulum malesuada vehicula viverra. Pellentesque maximus semper suscipit. Morbi eget dignissim urna, sit amet tempor nisl. <br /><br />
                                    Integer vel ipsum ut enim rutrum lacinia. Fusce sapien nunc, vulputate ac cursus in, luctus ac turpis.
                                </div>
                                <div class="post-time">Just Now</div>
                            </div>
                            <!-- end info-container -->
                        </li>
                    </ul>
                    <!-- end forum-list -->

                    <!-- begin pagination -->
                    <div class="text-right">
                        <ul class="pagination m-t-0">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="text"><span>...</span></li>
                            <li><a href="#">10</a></li>
                            <li class="right"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- end pagination -->

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