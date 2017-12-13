@extends("layouts.nobgimg")
@section('content')
    <div class="container main-container " style="padding: 40px;">
        <div class="users-show">
            @include('layouts.partials.editleft')
            <div class="col-md-9  left-col ">
                <div class="panel panel-default padding-md" style="border-style: solid; border-width: 1px;border-color: #ccc">
                    <div class="panel-body padding-bg">
                        <h2>
                            <i class="fa fa-picture-o" aria-hidden="true"></i> 请选择图片</h2>
                        <hr>
                        <form method="POST" action="https://laravel-china.org/users/16876/update_avatar" enctype="multipart/form-data" accept-charset="UTF-8">
                            <input name="_method" value="PATCH" type="hidden"><input name="_token" value="Rgcy8vg0EcQSkP9H69fOu8jfcmE1VE76WxBdXBrv" type="hidden"><div id="image-preview-div">
                                <label for="exampleInputFile">请选择图片：</label>
                                <br><img id="preview-img" class="avatar-preview-img" src="{{ url($avatar) }}">
                            </div>
                            <div class="form-group">
                                <input name="avatar" id="file" required="" type="file">
                            </div>
                            <br><button class="btn btn-lg btn-primary" id="upload-button" type="submit">上传头像</button>

                            <div class="alert alert-info" id="loading" style="display: none;" role="alert">
                                图片上传中...
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div id="message"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection