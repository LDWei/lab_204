<div class="col-md-3 main-col">
    <div class="box">
        <div class="padding-md">
            <div class="list-group text-center">
                <a href="{{ route('user.messages') }}" class="list-group-item big {{ navViewActive('user.messages') }}">
                    <i class="text-md fa fa-envelope" aria-hidden="true"></i>
                    &nbsp;私信
                </a>
                <a href="{{ route('notifications') }}" class="list-group-item big {{ navViewActive('notifications') }} ">
                    <i class="text-md fa fa-bell" aria-hidden="true"></i>
                    &nbsp;通知
                </a>
            </div>
        </div>
    </div>
</div>