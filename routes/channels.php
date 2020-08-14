<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('room.{roomId}', function ($user, $id) {
    return Arr::only($user->toArray(), ['id', 'name']);
});
