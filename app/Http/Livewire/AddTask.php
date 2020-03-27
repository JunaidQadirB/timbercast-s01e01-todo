<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddTask extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.add-task');
    }

    public function save()
    {
        $task = new \App\Task();
        $task->name = $this->name;
        $task->save();

        $this->reset();

        $this->emit('taskAdded');
    }

}
