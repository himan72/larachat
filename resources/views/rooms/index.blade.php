@extends('layouts.app')
@section('content')
  <div class="container">
      <h2 class="mb-4">Liste des rooms</h2>
      <ul class="list-group">
          @forelse($rooms as $room)
              <li class="list-group-item">{{ $room->title }}</li>
          @empty
              <p>Nothing here yet</p>
          @endforelse
      </ul>
  </div>

@endsection
