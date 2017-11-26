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
                        @foreach($infos as $info)
                        <form class="form-horizontal" method="POST" action="{{ route('user.save_edit',$info->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input name="_method" value="PATCH" type="hidden">
                            <input name="_token" value="{{Auth::user()->remember_token}}" type="hidden">
                            {{ csrf_field() }}
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
                                    <input class="form-control" name="github" value="{{ $info->gitHub}}" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    请跟 GitHub 上保持一致
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">邮 箱</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="email" value="{{$info->email}}" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                   如：name@website.com
                               </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-sm-2 control-label">真实姓名</label>
                               <div class="col-sm-6">
                                   <input class="form-control" name="real_name" value="{{$info->real_name}}" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：李小明
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">城市</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="city" value="{{$info->city}}" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：北京、广州
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">职业</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="job" value="{{$info->job}}" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：c++研发工程师
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">微信</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="weChat" value="{{$info->weChat}}" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    微信号
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">QQ</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="qq" value="{{$info->qq}}" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    QQ号
                                </div>
                            </div>

                            <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">电话</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="tell" value="{{$info->tell}}" type="text">
                                    </div>
                                    <div class="col-sm-4 help-block">
                                        电话号码
                                    </div>
                                </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">个人网站</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="selfWeb" value="{{$info->selfWeb}}" type="text">
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
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection