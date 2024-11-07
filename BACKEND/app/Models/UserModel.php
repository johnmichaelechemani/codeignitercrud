<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Your users table name
    protected $primaryKey = 'id';     // Primary key of the users table

    protected $allowedFields = ['name', 'password']; // Specify the fields you want to allow for insertion/updating

    // Optional: Add validation rules
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[50]',
        'password' => 'required|min_length[8]',
        //  'email' => 'required|valid_email',
    ];
}
