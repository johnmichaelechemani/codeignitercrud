<?php
namespace App\Controllers;
class Login extends BaseController
{
    public function index()
    {
        return view('auth/login'); // This view will contain the registration form
    }
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard'); // Redirect logged-in users to the dashboard
        }

        $session = session();
        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');

        // Load the model and find the user by name
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('name', $name)->first();

        if ($user) {
            // Verify the entered password against the hashed password in the database
            if (password_verify($password, $user['password'])) {
                // Set session data if login is successful
                $session->set([
                    'isLoggedIn' => true,
                    'userId' => $user['id'],
                    'userName' => $user['name'],
                    //  'userRole' => $user['role'] // Optional: if you have roles (e.g., admin)
                ]);

                return redirect()->to('/admin/dashboard'); // Redirect to the dashboard or home
            } else {
                // Incorrect password
                $session->setFlashdata('error', 'Invalid password.');
                return redirect()->back();
            }
        } else {
            // User not found
            $session->setFlashdata('error', 'User not found.');
            return redirect()->back();
        }
    }

}