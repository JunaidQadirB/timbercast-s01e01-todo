<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TasksList extends Component
{
    public $tasks;

    protected $listeners = [
        'taskDeleted' => 'refreshTasks',
        'taskAdded' => 'refreshTasks'
    ];

    public function mount()
    {
        $this->tasks = \App\Task::all();
    }

    public function tasks()
    {
        return \App\Task::all();
    }

    public function render()
    {
        return view('livewire.tasks-list');
    }

    public function refreshTasks()
    {
        $this->tasks = \App\Task::all();

    }
}
