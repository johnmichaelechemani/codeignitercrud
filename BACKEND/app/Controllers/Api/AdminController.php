<?php
namespace App\Controllers;
use App\Models\TaskModel; // Make sure to import the UserModel
use CodeIgniter\RESTful\ResourceController;
class AdminController extends ResourceController
{
    protected $format = 'json';

    public function index()
    {
        $model = new TaskModel();
        $tasks = $model->findAll();

        // Force JSON response
        return $this->response
            ->setStatusCode(200)
            ->setContentType('application/json')
            ->setBody(json_encode($tasks));
    }
    // public function indexTask()
    // {
    //     return view('admin/dashboard');
    // }

    // public function postTask()
    // {
    //     $task = $this->request->getPost('name');

    //     if ($task) {
    //         // Save the task to the database (assuming you have a Task model)
    //         $taskModel = new TaskModel();
    //         $taskModel->save(['name' => $task]);

    //         return redirect()->to('admin/dashboard')->with('success', 'Task added successfully.');
    //     }

    //     return redirect()->back()->with('error', 'Task could not be added.');
    // }
    // public function deleteTask($id)
    // {
    //     $taskModel = new TaskModel();
    //     $taskModel->delete($id);

    //     return redirect()->to('admin/dashboard')->with('success', 'Task deleted successfully.');
    // }

    // public function dashboard()
    // {
    //     $model = new TaskModel();
    //     $tasks = $model->findAll();

    //     // Force JSON response
    //     return $this->response
    //         ->setStatusCode(200)
    //         ->setContentType('application/json')
    //         ->setBody(json_encode($tasks));
    // }

    // public function listUsers()
    // {
    //     return view('admin/list_users');
    // }

    // public function createUser()
    // {
    //     return view('admin/create_user');
    // }

    // public function settings()
    // {
    //     return view('admin/settings');
    // }
}
