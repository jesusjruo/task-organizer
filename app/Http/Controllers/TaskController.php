<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function viewAllTasks() {
        $tasks = Task::latest()->get();
        return view('index' , ['tasks' => $tasks]);
    }

    public function viewTask(Task $task) {
        return view('show' , ['task' => $task]);
    }

    public function editTask(TaskRequest $request, Task $task) {
        return view('edit' , ['task' => $task]);
    }

    public function updateTask(TaskRequest $request, Task $task) {
        $incomingFields = $request->validated();

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['long_description'] = strip_tags($incomingFields['long_description']);

        $task->update($incomingFields);
        return redirect()->route('tasks.index')->with('success','Task updated succesfully');
    }

    public function createTask(TaskRequest $request) {
        $incomingFields = $request->validated();

        Task::create($incomingFields);
        return redirect()->route('tasks.index')->with('success','Task created succesfully');
    }
}
