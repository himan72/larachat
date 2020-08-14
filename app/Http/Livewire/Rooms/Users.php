<?php

namespace App\Http\Livewire\Rooms;

use App\Room;
use Livewire\Component;

class Users extends Component
{
    /**
     * @var mixed
     */
    public $roomId;

    public $users = [];

    protected function getListeners()
    {
        return [
            "echo-presence:room.{$this->roomId},here" => 'here',
            "echo-presence:room.{$this->roomId},joining" => 'joining',
            "echo-presence:room.{$this->roomId},leaving" => 'leaving',

        ];
    }

    public function mount(Room $room)
    {
        $this->roomId = $room->id;

    }
    public function render()
    {
        return view('livewire.rooms.users');
    }

    public function here($users)
    {
       $this->users = $users;

    }

    public function joining($user)
    {
        if(! in_array($this->users, $user)){
            $this->users[] = $user;
        }
    }

    public function leaving($user)
    {
        $this->users = collect($this->users)->whereNotIn('id', $user['id'])->toArray();

    }


}
