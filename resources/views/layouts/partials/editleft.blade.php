<div class="col-md-3 main-col">
    <div class="box" >
        <div class="padding-md ">
            <div class="list-group text-center">
                <a href="{{ route('user.edit_page') }}" class="list-group-item {{ navViewActive('user.edit_page') }}">
                    <i class="text-md fa fa-list-alt" aria-hidden="true"></i>
                    &nbsp;个人信息
                </a>
                <a href="{{ route('user.avatar_edit',$id) }}" class="list-group-item {{ navViewActive('user.avatar_edit') }}">
                    <i class="text-md fa fa-picture-o" aria-hidden="true"></i>
                    &nbsp;修改头像
                </a>
                <a href="https://laravel-china.org/users/16876/edit_email_notify" class="list-group-item ">
                    <i class="text-md fa fa-bell" aria-hidden="true"></i>
                    &nbsp;消息通知
                </a>
                <a href="https://laravel-china.org/users/16876/edit_password" class="list-group-item ">
                    <i class="text-md fa fa-lock" aria-hidden="true"></i>
                    &nbsp;修改密码
                </a>
            </div>
        </div>

    </div>
</div>