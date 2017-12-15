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
                        <form method="POST" action="" enctype="multipart/form-data" accept-charset="UTF-8" id="avatar">
                            <input name="_method" value="PATCH" type="hidden">
                            {{ csrf_field() }}

                            <div id="image-preview-div">
                                <label for="exampleInputFile">请选择图片：</label>
                                <br><img id="preview1" class="avatar-preview-img" src="{{ url($avatar) }}">
                            </div>

                            <input name="user_id" type="hidden" value="1">

                            <div class="form-group">
                                <input name="photo" id="file" required="" type="file" onchange="preview(this)">
                            </div>

                            <br><button class="btn btn-lg btn-primary" id="upload-button" onclick="uploadInfo()">上传头像</button>

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
<style>
    .avatar-preview-img{
        max-width: 380px;
    }
</style>
<script>
    function uploadInfo(){
        var formData = new FormData($("#avatar"));
        $.ajax({
            url:"{{ route('avatar.upload') }}",
            type:'POST',
            data:formData,
            contentType: false,
            processData: false,
            success: function (returndata) {
                console.log(returndata);
            },
            error: function (returndata) {
                console.log(returndata);
            }
        });
    }
    function preview(file){
        var prevDiv = document.getElementById('preview1');
        if (file.files && file.files[0]) {
            var reader = new FileReader();
            reader.onload = function (evt) {
                prevDiv.src = evt.target.result;
            }
            reader.readAsDataURL(file.files[0]);
        } else {
            prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
        }
    }
</script>