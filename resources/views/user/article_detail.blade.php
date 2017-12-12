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
                @include('flash::message')
                @include('user.partials.detial')

                    {{ $replays->links() }}

                @include('user.partials.vote')

                    <ul class="forum-list forum-detail-list">
                        @include('user.partials.comments')
                    </ul>
                @include('user.partials.user-reply')

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
        .emoji{
            width: 30px;
            height: 30px;
        }
        .vote-hint{
            margin-top: 20px;
        }
        .voted-users{

        }
    </style>
    <script type="text/javascript">
        window.onload=function(){
            var bt=document.getElementById("delete");
            bt.onclick=function(){
                if(confirm("真的要删除吗?")){
                    $("#deleteForm").submit();
                }
                else{
                    return false;
                }
            }
        }
    </script>

@endsection