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
                        <form method="POST" action="{{ route('avatar.upload') }}" enctype="multipart/form-data" accept-charset="UTF-8" id="avatar">
                            {{ csrf_field() }}
                            <div id="image-preview-div">
                                <label for="exampleInputFile">请选择图片：</label>
                                <br><img id="preview1" class="avatar-preview-img" src="{{ url($avatar) }}">
                            </div>
                            <input name="user_id" type="hidden" value="{{ $id }}">
                            <div class="form-group">
                                <input name="photo" id="file" required="" type="file" onchange="preview(this)">
                            </div>
                            <div class="alert alert-warning" id="message" style="display: none;"  role="alert">
                                图片限于bmp,png,gif,jpeg,jpg格式
                            </div>
                            <br><button class="btn btn-lg btn-primary" id="upload-button" type="submit">上传头像</button>

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
    //有待解决：使用Ajax上传失败，原因：url写的/avatar/upload，为什么请求的一直是本页面的url？
    {{--$.ajaxSetup({--}}
        {{--headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }--}}
    {{--});--}}
    {{--function uploadInfo(){--}}
        {{--console.log("11111");--}}
        {{--var formData = new FormData($("#avatar"));--}}

        {{--$.post({--}}
            {{--url:'/avatar/upload',--}}
            {{--type:'POST',--}}
            {{--data:formData,--}}
            {{--contentType: false,--}}
            {{--processData: false,--}}
            {{--success: function (returndata) {--}}
                {{--console.log(returndata);--}}
            {{--},--}}
            {{--error: function (returndata) {--}}
                {{--console.log(returndata);--}}
            {{--}--}}
        {{--});--}}
    {{--}--}}
    function preview(file) {
        var filepath = $('#file').val()
        var prevDiv = document.getElementById('preview1');
        var extStart = filepath.lastIndexOf(".");
        var ext = filepath.substring(extStart, filepath.length).toUpperCase();
        if (ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
            document.getElementById("message").style.display="";
            return false;
        }else{
            document.getElementById("message").style.display="none";
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
    }
</script>