<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;

class DatabaseTest extends Controller
{
    public function index()
    {
        try {
            // Load the default database connection
            $db = \Config\Database::connect();

            // Attempt a simple query to check the connection
            if ($db->connect()) {
                echo "Database connection successful!";
            }
        } catch (DatabaseException $e) {
            // Output the error message
            echo "Database connection failed: " . $e->getMessage();
        }
    }
}
