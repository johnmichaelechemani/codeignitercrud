<?php
namespace App\Controllers;
class Logout extends BaseController
{
    public function logout()
    {
        $session = session();
        $session->destroy(); // Clears all session data
        return redirect()->to('/auth/login'); // Redirect to login page or home page
    }

}