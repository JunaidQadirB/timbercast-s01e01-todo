@extends('layouts.app')

@section('content')
    <div class="container">
        @livewire('add-task')
        <h4 class="mt-5">My To-Dos</h4>
        @livewire('tasks-list')
    </div>
@endsection
