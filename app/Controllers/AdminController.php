<?php
namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');   // Loads app/Views/admin/dashboard.php
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
