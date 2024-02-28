<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function viewAllTasks() {
        $tasks = Task::latest()->get();
        return view('index' , ['tasks' => $tasks]);
    }

    public function viewTask(Task $task) {
        return view('show' , ['task' => $task]);
    }

    public function createTask(Request $request) {
        $incomingFields = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => 'required',
            'long_description'=> 'required'
        ]);

        Task::create($incomingFields);
        return redirect()->route('tasks.index')->with('success','Task created succesfully');
    }
}
