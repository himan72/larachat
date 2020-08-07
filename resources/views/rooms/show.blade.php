@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="mb-4">{{ $room->title }}</h2>
        <ul class="list-group">
            @forelse($messages as $message)
                <li class="list-group-item">{{ $message->body }}</li>
            @empty
                <p>Nothing here yet</p>
            @endforelse
        </ul>
    </div>
@endsection
