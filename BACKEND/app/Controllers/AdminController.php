<?php
namespace App\Controllers;
use App\Models\TaskModel; // Make sure to import the UserModel

class AdminController extends BaseController
{
    public function indexTask()
    {
        return view('admin/dashboard');
    }

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
    public function deleteTask($id)
    {
        $taskModel = new TaskModel();
        $taskModel->delete($id);

        return redirect()->to('admin/dashboard')->with('success', 'Task deleted successfully.');
    }

    public function dashboard()
    {
        if ($this->request->getMethod() === 'options') {
            // If the request method is OPTIONS, set CORS headers and return immediately
            return $this->response
                ->setHeader('Access-Control-Allow-Origin', '*')
                ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
                ->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With')
                ->setStatusCode(200);
        }

        $model = new TaskModel();
        $tasks = $model->findAll();

        // Set CORS headers for the actual response
        return $this->response
            ->setHeader('Access-Control-Allow-Origin', '*')
            ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
            ->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With')
            ->setJSON($tasks);
    }

    public function listUsers()
    {
        return view('admin/list_users');
    }

    public function createUser()
    {
        return view('admin/create_user');
    }

    public function settings()
    {
        return view('admin/settings');
    }
}
