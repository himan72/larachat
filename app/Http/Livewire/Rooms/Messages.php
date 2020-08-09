<?php

namespace App\Http\Livewire\Rooms;

use App\Room;
use Livewire\Component;

class Messages extends Component
{
    /**
     * @var \App\Room|mixed
     */
    public $room;

    protected $listeners = [ 'messageCreated'];

    public function mount(Room $room)
    {
        $this->room = $room;

    }
    public function render()
    {
        return view('livewire.rooms.messages', [
            'messages' => $this->room->messages()->latest()->get(),
        ]);
    }

    public function messageCreated()
    {
        $this->render();
    }
}
