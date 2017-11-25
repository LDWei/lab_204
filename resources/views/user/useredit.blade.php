@extends("layouts.nobgimg")
@section("content")
    <div class="container main-container " style="padding: 40px;">
        <div class="users-show">
            @include('layouts.partials.editleft')
            <div class="col-md-9  left-col ">
                <div class="panel panel-default padding-md" style="border-style: solid; border-width: 1px;border-color: #ccc">
                    <div class="panel-body ">
                        <h2>
                            <i class="fa fa-cog" aria-hidden="true"></i> 编辑个人资料</h2>
                        <hr>
                        <form class="form-horizontal" method="POST" action="https://laravel-china.org/users/16876" accept-charset="UTF-8" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input name="_method" value="PATCH" type="hidden">
                            <input name="_token" value="u5odx7F7KVb2Sj1VIMwsHg0PybSxgPJ0TtFemCy5" type="hidden">
                            @foreach($infos as $info)
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="sex">
                                        <option value="unselected" {{ $info->sex == 'null' ? 'selected' : '' }}>未选择</option>
                                        <option value="male" {{ $info->sex == 'male' ? 'selected' : '' }}>男</option>
                                        <option value="female" {{ $info->sex == 'female' ? 'selected' : '' }}>女</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 help-block"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">GitHub</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="github_name" value="" type="text">
                                </div>

                                <div class="col-sm-4 help-block">
                                    请跟 GitHub 上保持一致
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">邮 箱</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="email" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：name@website.com
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">真实姓名</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="real_name" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：李小明
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">城市</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="city" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：北京、广州
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">公司</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="company" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：阿里巴巴
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">微博个人页面</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="weibo_link" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    微博个人主页链接
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Twitter 帐号</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="twitter_account" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：summer_charlie
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">个人网站</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="personal_website" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：example.com，不需要加前缀 https://
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-6">
                                    <input class="btn btn-primary" id="user-edit-submit" value="应用修改" type="submit">
                                </div>
                            </div>
                                @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection