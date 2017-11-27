@extends("layouts.nobgimg")
@section("content")
    <div class="container" style="padding: 40px;">
        <div class="container main-container ">
            <div class="users-show  row">
                @include('flash::message')
                <div class="col-md-3">
                    <div style="border-style: solid; border-width: 1px;border-color: #ccc">

                        @include('user.partials.basicinfo')

                    <div class="box text-center">
                        <div class="padding-sm user-basic-nav">
                            <ul class="list-group">
                                <a href="https://laravel-china.org/users/16876/articles" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-headphones"></i> Ta 发布的文章</li>
                                </a>

                                <a href="https://laravel-china.org/users/16876/topics" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-list-ul"></i> Ta 发布的话题</li>
                                </a>

                                <a href="https://laravel-china.org/users/16876/replies" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-comment"></i> Ta 发表的回复</li>
                                </a>

                                <a href="https://laravel-china.org/users/16876/following" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-eye"></i> Ta 关注的用户</li>
                                </a>

                                <a href="https://laravel-china.org/users/16876/votes" class="">
                                    <li class="list-group-item">
                                        <i class="text-md fa fa-thumbs-up"></i> Ta 赞过的话题</li>
                                </a>

                            </ul>
                        </div>

                    </div>
            </div>

                <div class="main-col col-md-9 left-col">


                </div>
            </div>
        </div>
    </div>
        <style>
            .panel-default
            {
                border-style:solid;
                border-width: 1px;
                border-color: #ccc;
            }

        </style>

@endsection
