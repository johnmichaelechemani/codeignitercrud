<?php
namespace App\Controllers;
use App\Models\UserModel; // Make sure to import the UserModel

class AdminController extends BaseController
{
    public function dashboard()
    {
        $model = new UserModel();

        // Fetch all users from the database
        $data['users'] = $model->findAll(); // You can also use other methods like where() for filtering

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
}
