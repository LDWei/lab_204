@extends("layouts.nobgimg")
@section("content")
<!-- begin page-title -->
<div class="page-title has-bg">
    <!-- begin bg-cover -->
    <div class="bg-cover">
        <img src="{{ URL::asset('assets/img/cover2.jpg')}}" alt="" />
    </div>
    <!-- end bg-cover -->
    <!-- begin container -->
    <div class="container">
        <!-- begin breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="index.html">Forum</a></li>
            <li class="active">&nbsp;</li>
        </ul>
        <!-- end breadcrumb -->
        <h1>Twitter Bootstrap</h1>
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
            <div class="col-md-9">
                <!-- begin panel-forum -->
                <div class="panel panel-forum">
                    <!-- begin forum-list -->
                    <ul class="forum-list forum-topic-list">
                        <li>
                            <!-- begin media -->
                            <div class="media">
                                <img src="{{ URL::asset('assets/img/user-1.jpg')}}" alt="" />
                            </div>
                            <!-- end media -->
                            <!-- begin info-container -->
                            <div class="info-container">
                                <div class="info">
                                    <h4 class="title"><a href="detail.html">How to create an arrow by using css?</a></h4>
                                    <ul class="info-start-end">
                                        <li>post by <a href="detail.html">Radomit Grigor</a></li>
                                        <li>latest reply <a href="detail.html">Kama Adisa</a></li>
                                    </ul>
                                </div>
                                <div class="date-replies">
                                    <div class="time">
                                        8 hours ago
                                    </div>
                                    <div class="replies">
                                        <div class="total">8</div>
                                        <div class="text">REPLIES</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end info-container -->
                        </li>
                        <li>
                            <!-- begin media -->
                            <div class="media">
                                <img src="{{ URL::asset('assets/img/user-2.jpg')}}" alt="" />
                            </div>
                            <!-- end media -->
                            <!-- begin info-container -->
                            <div class="info-container">
                                <div class="info">
                                    <h4 class="title"><a href="detail.html">Tooltip in Bootstrap Modal <i class="fa fa-arrow-circle-up text-theme"></i></a></h4>
                                    <ul class="info-start-end">
                                        <li>post by <a href="detail.html">Timotheos Nikon</a></li>
                                        <li>latest reply <a href="detail.html">Raphael Afzal</a></li>
                                    </ul>
                                </div>
                                <div class="date-replies">
                                    <div class="time">
                                        1 day ago
                                    </div>
                                    <div class="replies">
                                        <div class="total">42</div>
                                        <div class="text">REPLIES</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end info-container -->
                        </li>
                        <li>
                            <!-- begin media -->
                            <div class="media">
                                <img src="{{ URL::asset('assets/img/user-3.jpg')}}" alt="" />
                            </div>
                            <!-- end media -->
                            <!-- begin info-container -->
                            <div class="info-container">
                                <div class="info">
                                    <h4 class="title"><a href="detail.html">Migrate from Bootstrap 2.x.x to Bootstrap 3.x.x</a></h4>
                                    <ul class="info-start-end">
                                        <li>post by <a href="detail.html">Kunibert Teodoro</a></li>
                                        <li>latest reply <a href="detail.html">Eskandar Eliud</a></li>
                                    </ul>
                                </div>
                                <div class="date-replies">
                                    <div class="time">
                                        2 days ago
                                    </div>
                                    <div class="replies">
                                        <div class="total">12</div>
                                        <div class="text">REPLIES</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end info-container -->
                        </li>
                    </ul>
                    <!-- end forum-list -->
                </div>
                <!-- end panel-forum -->

                <!-- begin pagination -->
                <div class="text-right">
                    <ul class="pagination m-t-0">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="text"><span>...</span></li>
                        <li><a href="#">322</a></li>
                        <li class="right"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- end pagination -->
            </div>
            <!-- end col-9 -->
            @include('layouts.hotPost')
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end content -->
@endsection
