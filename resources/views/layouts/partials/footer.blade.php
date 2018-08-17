<!-- begin #footer -->
<div id="footer" class="footer">
    <!-- begin container -->
    <div class="container">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>关于我们</h4>
                    <p>
                        我们是武昌理工学院最棒的实验室有位文豪说得好：「看一个作家的水平，不是看他发表了多少文字，而要看他的废纸篓里扔掉了多少。」我觉得同样的理论适用于编程。好的程序员，他们删掉的代码，比留下来的还要多很多。如果你看见一个人写了很多代码，却没有删掉多少，那他的代码一定有很多垃圾。
                    </p>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>友情链接</h4>
                    <ul class="latest-post">
                        <li>
                            <h4 class="title"><a href="#">Consectetur adipiscing elit ultrices</a></h4>
                            <p class="time">yesterday 10:42am</p>
                        </li>
                        <li>
                            <h4 class="title"><a href="#">Fusce ultrices ipsum porttitor</a></h4>
                            <p class="time">10/04/2015</p>
                        </li>
                        <li>
                            <h4 class="title"><a href="#">Cras porttitor fermentum adipiscing</a></h4>
                            <p class="time">02/04/2015</p>
                        </li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4>New Users</h4>
                    <ul class="new-user">
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-1.jpg')}}" alt="" /></a></li>
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-2.jpg')}}" alt="" /></a></li>
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-3.jpg')}}" alt="" /></a></li>
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-4.jpg')}}" alt="" /></a></li>
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-5.jpg')}}" alt="" /></a></li>
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-6.jpg')}}" alt="" /></a></li>
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-7.jpg')}}" alt="" /></a></li>
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-8.jpg')}}" alt="" /></a></li>
                        <li><a href="#"><img src="{{ URL::asset('assets/img/user-9.jpg')}}" alt="" /></a></li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end #footer -->
<!-- begin #footer-copyright -->
<div id="footer-copyright" class="footer-copyright">
    <div class="container">
        &copy; 2017 - 2018 SeanTheme All Right Reserved
        <a href="#">联系我们</a>
        <a href="#">武昌理工学院</a>
    </div>
</div>
<!-- end #footer-copyright -->
{{--<!-- begin theme-panel -->--}}
{{--<div class="theme-panel">--}}
    {{--<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>--}}
    {{--<div class="theme-panel-content">--}}
        {{--<ul class="theme-list clearfix">--}}
            {{--<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>--}}
            {{--<li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>--}}
            {{--<li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>--}}
            {{--<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>--}}
            {{--<li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- end theme-panel -->--}}

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ URL::asset('assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jquery/jquery-migrate-1.1.0.min.')}}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{ URL::asset('assets/crossbrowserjs/html5shiv.js')}}"></script>
<script src="{{ URL::asset('assets/crossbrowserjs/respond.min.js')}}"></script>
<script src="{{ URL::asset('assets/crossbrowserjs/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{ URL::asset('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{ URL::asset('assets/js/apps.min.js')}}"></script>
<!-- ================== END BASE JS ================== -->
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ URL::asset('assets/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js')}}"></script>
<script src="{{ URL::asset('assets/js/forum-details-page.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        ForumDetailsPage.init();
    });
</script>
</body>
</html>