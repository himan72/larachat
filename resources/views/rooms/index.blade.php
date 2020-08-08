@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="my-4">Liste des rooms</h2>
        <ul class="list-group">
            @forelse($rooms as $room)
                <li class="list-group-item">
                    <a href="{{ route('rooms.show', $room->slug) }}">{{ $room->title }}
                    </a>
                </li>
            @empty
                <p>Nothing here yet</p>
            @endforelse
        </ul>
    </div>

@endsection
