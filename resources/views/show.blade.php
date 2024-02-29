@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>{{ $task->title }}</h2>

    <div class="card">
        <div class="card-body">
            <p class="card-text">{{ $task->description }}</p>

            @if($task->long_description)
                <hr>
                <p class="card-text">{{ $task->long_description }}</p>
            @endif

            <div class="mt-3">
                <p class="text-muted m-0">Created at: {{ $task->created_at->format('F j, Y H:i') }}</p>
                <p class="text-muted m-0">Last updated: {{ $task->updated_at->format('F j, Y H:i') }}</p>
            </div>
            <div class="mt-3">
                <a href="/tasks/{{$task->id}}/edit" class="btn btn-primary small">Edit task</a>
            </div>
        </div>
    </div>
</div>
@endsection