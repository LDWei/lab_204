<li class="list-group-item">
    <a href="{{ route('user.page',$notification->data['id']) }}">{{ $notification->data['name'] }}</a>关注了您
    <span class="small">
    <span class="timeago popover-with-html" data-original-title="" title=""> ⋅ {{\Carbon\Carbon::parse($notification->created_at)->diffForHumans()  }}</span>
    </span>
</li>