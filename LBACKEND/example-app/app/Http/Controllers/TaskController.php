<?php

namespace App\Http\Controllers;

use App\Models\TaskModel; // Assuming you have a Task model
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = TaskModel::all(); // Retrieve all tasks from the database
        return view('task', compact('tasks')); // Pass the tasks to the users index view
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        TaskModel::create($validatedData);

        return redirect()->back()->with('success', 'Task created successfully');
    }
    public function update(Request $request, $id)
    {
        $task = TaskModel::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $task->update($validatedData);

        return redirect()->back()->with('success', 'Task updated successfully');
    }
    public function destroy($id)
    {
        $task = TaskModel::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('success', 'Task deleted successfully');
    }
}