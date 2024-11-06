<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'task'; // Your users table name
    protected $primaryKey = 'id';     // Primary key of the users table

    protected $allowedFields = ['name']; // Specify the fields you want to allow for insertion/updating

    // Optional: Add validation rules
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[50]',
    ];
}
