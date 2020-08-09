<div>
    <ul class="list-group">
        @forelse($messages as $message)
            <li class="list-group-item">{{ $message->body }}</li>
        @empty
            <p>Nothing here yet</p>
        @endforelse
    </ul>
</div>
