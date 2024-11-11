<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Method to get users and pass them to the welcome view
    public function index()
    {
        // Fetch all tasks from the database
        $tasks = DB::table('task')->get();

        // Return the welcome view with the tasks data
        return view('welcome', ['tasks' => $tasks]);
    }
}