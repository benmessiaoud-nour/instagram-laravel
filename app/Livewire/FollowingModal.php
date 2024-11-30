<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class FollowingModal extends ModalComponent
{

    public $userId;

    protected $user;

    protected $following_list;

    public function mount(){
        $this->user = User::find($this->userId);

        $this->following_list = $this->user->following()->wherePivot('confirmed' , true)->get();
    }



    public function render()
    {
        return view('livewire.following-modal');
    }
}
