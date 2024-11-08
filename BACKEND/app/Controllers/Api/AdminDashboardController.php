<?php
namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\TaskModel;

class AdminDashboardController extends ResourceController
{
    protected $format = 'json';

    public function index()
    {
        $model = new TaskModel();
        $tasks = $model->findAll();

        return $this->respond($tasks, 200);
    }

    public function create()
    {
        $model = new TaskModel();
        $data = $this->request->getJSON(true);

        if ($model->insert($data)) {
            $newTask = $model->find($model->getInsertID());
            return $this->respondCreated($newTask);
        } else {
            return $this->fail($model->errors(), 400);
        }
    }
    public function delete($id = null)
    {
        $model = new TaskModel();
        $task = $model->find($id);

        if ($task) {
            if ($model->delete($id)) {
                return $this->respondDeleted($task);
            } else {
                return $this->failServerError('Could not delete task.');
            }
        } else {
            return $this->failNotFound('Task not found.');
        }
    }

}
