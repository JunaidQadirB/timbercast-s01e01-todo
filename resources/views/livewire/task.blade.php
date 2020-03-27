<div>
    <li class="list-group-item d-flex py-2">
        <div class="form-check">
            <label class="form-check-label @if($isDone) text-decoration-strike @endif" for="taskCheck{{$task->id}}">
                <input wire:click="toggle" @if($isDone) checked @endif  type="checkbox" class="form-check-input" id="taskCheck{{$task->id}}" />{{$task->name}}</label>
        </div>
        <button wire:click="delete" type="button" class="btn btn-link btn-sm py-0">
            <i class="fa fa-trash"></i>
        </button>
    </li>
</div>
