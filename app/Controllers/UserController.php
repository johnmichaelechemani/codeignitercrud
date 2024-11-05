<?php
namespace App\Controllers;

class UserController extends BaseController
{
    public function dashboard()
    {
        return view('user/dashboard');  // Loads app/Views/user/dashboard.php
    }

    public function profile()
    {
        return view('user/profile');    // Loads app/Views/user/profile.php
    }

    public function update()
    {
        return view('user/update');     // Loads app/Views/user/update.php
    }
}

