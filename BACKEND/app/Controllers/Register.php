<?php
namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('auth/register'); // This view will contain the registration form
    }
    // Handle registration form submission  
    public function store()
    {
        $userModel = new UserModel();

        // Validate form inputs
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[50]',
            'password' => 'required|min_length[8]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Redirect back with validation errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Hash the password
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Prepare user data
        $userData = [
            'name' => $this->request->getPost('name'),
            'password' => $password
        ];

        // Save user to database
        $userModel->save($userData);

        // Redirect with success message
        return redirect()->to('auth/login')->with('success', 'Registration successful. Please log in.');
    }
}
