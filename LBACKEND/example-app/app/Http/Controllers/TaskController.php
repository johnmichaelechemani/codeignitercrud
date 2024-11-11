<?php

namespace App\Http\Controllers;

use App\Models\Task; // Assuming you have a Task model
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // Retrieve all tasks from the database
        return view('/', compact('tasks')); // Pass the tasks to the welcome view
    }
}