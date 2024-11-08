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
        return $this->response
            ->setStatusCode(200)
            ->setContentType('application/json')
            ->setBody(json_encode($tasks));
    }
}