@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="mb-4">{{ $room->title }}</h2>
        <livewire:rooms.messages :room="$room"/>

    </div>
@endsection
