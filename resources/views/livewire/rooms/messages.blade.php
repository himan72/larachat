<div>
    <ul class="chat-box chatContainerScroll">
        <ul class="list-group">
            @forelse($messages as $message)
                <li class="chat-left">
                    <div class="chat-avatar">
                        <img src="https://www.bootdey.com/img/Content/avatar/avatar1.png" alt="Retail Admin">
                        <div class="chat-name">{{$message->user->name}}</div>
                    </div>
                    <div class="chat-text">
                        {{ $message->body }}?
                    </div>
                    <div class="chat-hour">{{ $message->created_at->diffForHumans() }} </div>
                </li>
                <li class="list-group-item">{{ $message->body }}</li>
            @empty
                <p>Nothing here yet</p>
            @endforelse
        </ul>
</div>
