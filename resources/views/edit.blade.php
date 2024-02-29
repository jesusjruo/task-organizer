@extends('layouts.app')

@section('title' , 'Edit Task')

@section('content')
<div class="container py-md-5 container--narrow">
        <form action="/tasks/{{$task->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Ingresa el título" value='{{ old('title' , $task->title) }}'>
                @error('title')
                <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Ingresa la descripción">{{ old('description' , $task->description)}}</textarea>
                @error('description')
                <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="long_description">Descripción larga:</label>
                <textarea name="long_description" class="form-control" id="long_description" rows="5" placeholder="Ingresa la descripción larga">{{old('long_description' , $task->long_description)}}</textarea>
                @error('long_description')
                <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
      </div>
@endsection