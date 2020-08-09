<?php

namespace App\Http\Livewire\Rooms;

use App\Room;
use Livewire\Component;

class CreateMessage extends Component
{
    /**
     * @var \App\Room|mixed
     */
    public $room;

    public $body = '';

    public function mount(Room $room)
    {
        $this->room = $room;

    }
    public function render()
    {
        return view('livewire.rooms.create-message');
    }

    public function create()
    {
        $this->validate([
            'body' => 'required',
        ]);

        $this->room->messages()->create([
            'body' => $this->body,
            'user_id' => auth()->user()->id,
        ]);

        $this->body = '';

        $this->emit('messageCreated');

    }
}
