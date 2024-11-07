<?php
namespace App\Controllers;

class UserController extends BaseController
{
    public function dashboard()
    {
        $session = session();
        $userData = [
            'userName' => $session->get('userName'),  // Access user name from session
            'userId' => $session->get('userId'),      // Access user ID from session
            // Add other data if needed
        ];

        // Pass the user data to the view
        return view('user/dashboard', $userData);

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

