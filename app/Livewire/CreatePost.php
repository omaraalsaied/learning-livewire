<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Post;

class CreatePost extends Component
{

    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $content;

    public function save()
    {
        $this->validate();

        Post::create([
            "title" => $this->title,
            "content" => $this->content,
        ]);

        $this->redirect('/posts', navigate:true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
