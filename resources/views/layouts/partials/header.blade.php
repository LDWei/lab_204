<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>lab204</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/theme/default.css')}}" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ URL::asset('assets/plugins/pace/pace.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body style="font-size: 14px;">
<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container -->
    <div class="container">
        <!-- begin navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{route('home')}}" class="navbar-brand">
                <span class="navbar-logo"></span>
                <span class="brand-text">
                        Lab204
                </span>
            </a>
            <a href="index.html" class="navbar-brand">
                <span class="brand-text">
                        成果
                </span>
            </a>
            <a href="{{route('forum')}}" class="navbar-brand">
                <span class="brand-text">
                       技术
                </span>
            </a>
            <a href="index.html" class="navbar-brand">
                <span class="brand-text">
                       基金
                </span>
            </a>
            <a href="index.html" class="navbar-brand">
                <span class="brand-text">
                       公告
                </span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- begin #header-navbar -->
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="搜索..." />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">登录</a></li>
                        <li><a href="{{ route('register') }}">注册</a></li>
                    @else
                        <li>
                            <a href="{{ route('notifications') }}" >
                                <span class="badge badge-{{ Auth::user()->message_count > 0 ? 'danger' : 'default'}}" data-toggle="tooltip" data-placement="bottom" title="消息提醒" style="float: none;font-size: 100%;">
                                    {{ Auth::user()->message_count }}
                                </span>
                            </a>
                        </li>
                        <li>
                            <img style="
                                        width: 30px;
                                        height: 30px;
                                        margin-right: 1px;
                                        margin-left:15px;
                                        margin-top: 16px;
                                        border: 1px solid white;
                                        border-radius: 50%;
                                    " alt="" src="{{url(Auth::user()->avatar)}}">
                        </li>
                        <li role="presentation" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('user.page',Auth::user()->id) }}" style="text-align: center">
                                        <span class="glyphicon glyphicon-user"></span>&nbsp个人中心</a>
                                    <a href="{{ route('user.edit_page') }}" style="text-align: center">
                                        <span class="glyphicon glyphicon-pencil"></span>&nbsp编辑资料
                                    </a>
                                    <a href="{{ route('user.article',Auth::user()->id) }}" style="text-align: center">
                                        <span class="glyphicon glyphicon-plus"></span>&nbsp发布问题
                                    </a>

                                    <a href="{{ route('logout') }}" style="text-align: center" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" >
                                        <span class="glyphicon glyphicon-remove"></span>&nbsp退出登陆
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @if(isAdmin(Auth::user()))
                        <li>
                            <a href="#" style="color: #5AB2E5">管理员</a>
                        </li>
                    @endif

                @endif

            </ul>
        </div>
        <!-- end #header-navbar -->
    </div>
    <!-- end container -->
</div>
<!-- end #header -->