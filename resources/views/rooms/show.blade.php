@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content-wrapper">
            <h2 class="my-4">{{ $room->title }}</h2>
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                    <div class="users-container">
                        <div class="chat-search-box">
                            <div class="input-group">
                                <h3>Liste des Utilisateurs</h3>
                            </div>
                        </div>
                        <livewire:rooms.users :room="$room" />
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="card m-0">
                        <!-- Row start -->
                        <div class="row no-gutters">
                            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9 col-9">
                                <div class="chat-container">
                                    <livewire:rooms.messages :room="$room"/>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
    </div>
@endsection
