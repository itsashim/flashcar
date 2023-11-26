@foreach($notifications as $notification)
    <a class="nav-link @if($notification->status==0) notify-red @else notify-green @endif" href="{{ url('admin/quick-notification/show/'.$notification->id) }}" >
        {{ $notification->title }}<br/>
        {{ $notification->detail }} 
        <span class="float-right">
            {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
        </span>
    </a>
@endforeach
<a class="nav-link text-center" href="{{ url('admin/quick-notification') }}">
    <u>View All</u>
</a>