<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Todos')]
class Todo extends Component
{
    public $todos = [
        'walls',
        'floors',
        'kitchen walls',
        'bath walls'
    ];

    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function updated($propery, $value)
    {
        $this->todo = strtoupper($this->todo);
    }
    public function render()
    {
        return view('livewire.todo');
    }
}
