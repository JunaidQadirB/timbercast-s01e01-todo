<div>
    <ul class="list-group">
        @foreach($tasks as $task)
            @livewire('task', ['task' => $task], key($task->id))
        @endforeach
    </ul>
</div>
