@extends("layouts.nobgimg")
@section('content')
    <div class="container main-container " style="padding: 40px;">
        <div class="users-show">
            @include('user.messages.left')
            <div class="col-md-9  left-col ">
                <div class="panel-default">
                    <div class="panel-heading">消息通知</div>
                    <div class="panel-body">
                        <ul class="list-group">
                        @foreach($user->Notifications as $notification)
                            @include('user.notifications.'.snake_case(class_basename($notification->type)))
                                {{ $notification->markAsRead()}}
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection