<div>
    <form wire:submit.prevent="save">
        <div class="form-group my-3">
            <input wire:model="name" type="text" class="form-control" name="todo" id="todo" aria-describedby="todoHelpText"
                   placeholder="Enter a task. e.g: Water the plant">
            <small id="todoHelpText" class="form-text text-muted"></small>
        </div>
    </form>
</div>
