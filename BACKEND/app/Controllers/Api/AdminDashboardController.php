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

        // Force JSON response
        return $this->respond($tasks);
    }

    public function create()
    {
        $model = new TaskModel();

        // Retrieve JSON data as an array
        $data = $this->request->getJSON(true);

        if (!$data) {
            // If data is not provided or invalid, respond with an error
            return $this->failValidationErrors('Invalid input data', 400);
        }

        // Attempt to insert data
        if ($model->insert($data)) {
            // Retrieve the newly created task
            $newTask = $model->find($model->getInsertID());
            return $this->respondCreated($newTask);
        } else {
            // Respond with validation errors if insertion fails
            return $this->failValidationErrors($model->errors(), 400);
        }
    }
}
