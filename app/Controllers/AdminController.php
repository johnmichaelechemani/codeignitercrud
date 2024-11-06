<?php
namespace App\Controllers;
use App\Models\TaskModel; // Make sure to import the UserModel

class AdminController extends BaseController
{
    public function dashboard()
    {
        $model = new TaskModel();

        // Fetch all users from the database
        $data['tasks'] = $model->findAll();

        return view('admin/dashboard', $data); // Pass the user data to the view
    }

    public function listUsers()
    {
        return view('admin/list_users');  // Loads app/Views/admin/list_users.php
    }

    public function createUser()
    {
        return view('admin/create_user'); // Loads app/Views/admin/create_user.php
    }

    public function settings()
    {
        return view('admin/settings');    // Loads app/Views/admin/settings.php
    }

    public function indexTask()
    {
        return view('admin/dashboard');
    }
    // Handle registration form submission  
    public function postTask()
    {
        $task = $this->request->getPost('name');

        if ($task) {
            // Save the task to the database (assuming you have a Task model)
            $taskModel = new TaskModel();
            $taskModel->save(['name' => $task]);

            return redirect()->to('admin/dashboard')->with('success', 'Task added successfully.');
        }

        return redirect()->back()->with('error', 'Task could not be added.');
    }
}
