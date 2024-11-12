<?php
namespace App\Http\Controllers;

use App\Models\UserModel; // Assuming you have a Task model
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve task data from the database
        $users = UserModel::all(); // You can apply filters or pagination as needed

        // Pass the task data to the view
        return view('welcome', compact('users'));
    }
}