<?php

namespace App\Http\Controllers;

use App\Models\TaskModel; // Assuming you have a Task model
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = TaskModel::all(); // Retrieve all tasks from the database
        return view('task', compact('tasks')); // Pass the tasks to the users index view
    }
}