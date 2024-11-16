<?php

namespace App\Livewire;

use App\Models\User;

use Livewire\Component;


class Follow extends Component
{

    public $post;
    public $follow_state;
    public $userId;
    protected $user;

    public function mount(){

        $this->user = User::find($this->userId);
        $this->set_follow_state();
    }

    public function toggle_follow()
    {
        $this->user = User::find($this->userId);
        auth()->user()->toggle_follow($this->user);
        $this->set_follow_state();
    }


    protected function set_follow_state()
    {
        if(auth()->user()->is_pending($this->user)) {
            $this->follow_state = 'pending' ;
        }elseif(auth()->user()->is_following($this->user)) {
            $this->follow_state = 'unfollow' ;
        }else{
            $this->follow_state = 'follow' ;
        }
    }

    public function render()
    {
        return view('livewire.follow');
    }
}
