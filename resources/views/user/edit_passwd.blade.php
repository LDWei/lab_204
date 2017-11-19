@extends("layouts.nobgimg")
@section("content")
    <div class="container main-container " style="padding: 40px;">
        <div class="users-show">
            @include('layouts.partials.editleft')
            <div class="col-md-9  left-col " style="height: 700px">
                <div class="panel panel-default padding-md" style="border-style: solid; border-width: 1px;border-color: #ccc">
                    <div class="panel-body ">
                        <h2>
                            <i class="fa fa-lock" aria-hidden="true"></i> 修改密码</h2>
                        <hr>
                        <form class="form-horizontal" method="POST" action="https://laravel-china.org/users/16876/update_password" accept-charset="UTF-8">
                            <input name="_method" value="PATCH" type="hidden"><input name="_token" value="f8TVcFaqDkkmHrvXwQakNOgjVFawqOdq4dbirdrz" type="hidden"><div class="form-group">
                                <label class="col-md-2 control-label">邮 箱：</label>
                                <div class="col-md-6">
                                    <input name="" class="form-control" value="" disabled="" type="text"><input name="email" value="" type="hidden">
                                </div>
                                <div class="col-sm-4 help-block">
                                    设置密码后将可以使用此邮箱登录。
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">密 码：</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="password" required="" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">确认密码：</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="password_confirmation" required="" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-6">
                                    <input class="btn btn-primary" id="user-edit-submit" value="应用修改" type="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            @endsection
