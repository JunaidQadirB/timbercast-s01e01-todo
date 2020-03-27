<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    /**
     * @var \App\Task
     */
    public $task;
    public $isDone;

    public function mount(\App\Task $task)
    {
        $this->task = $task;
        $this->isDone = $this->task->is_done;
    }

    public function render()
    {
        return view('livewire.task');
    }

    public function toggle()
    {
        $this->isDone = !$this->isDone;

        $this->task->is_done = $this->isDone;

        $this->task->save();
        $this->task->refresh();
    }

    public function delete()
    {
        $this->task->delete();
        $this->emit('taskDeleted');
    }
}
