<?php

namespace App\Livewire;

use Livewire\Component;

class PostRow extends Component
{

    public $post;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function archieve()
    {
        $this->post->archieve();
    }
    public function render()
    {
        return view('livewire.post-row');
    }
}
