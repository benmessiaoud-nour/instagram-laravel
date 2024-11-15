<?php

namespace App\Livewire;

use Livewire\Component;

class LikedBy extends Component
{
    public $post;

    protected $listeners = ['likesToggled' => 'getLikesProperty'];

    public function getLikesProperty(){
        return $this->post->likes()->count();
    }

    public function getFirstusernameProperty(){
        return $this->post->likes()->first()->username;
    }
    public function render()
    {
        return view('livewire.liked-by');
    }
}
