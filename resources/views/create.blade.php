@extends('layouts.app')

@section('title' , 'Add Task')

@section('content')
<div class="container py-md-5 container--narrow">
        <form action="/tasks" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" placeholder="Ingresa el título">
                @error('title')
                <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Ingresa la descripción"></textarea>
                @error('description')
                <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="long_description">Descripción larga:</label>
                <textarea class="form-control" id="long_description" rows="5" placeholder="Ingresa la descripción larga"></textarea>
                @error('long_description')
                <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
      </div>
@endsection