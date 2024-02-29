@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Task List</h2>
  
    <div class="list-group">
      @forelse($tasks as $task)
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="list-group-item list-group-item-action">
          <h4 class="mb-1">{{ $task->title }}</h4>
          <p class="mb-1">{{ $task->description }}</p>
        </a>
      @empty
        <div class="alert alert-info" role="alert">
          <h4 class="alert-heading">No tasks found!</h4>
          <p>It seems like there are no tasks available at the moment.</p>
        </div>
      @endforelse
    </div>
  </div>
@endsection