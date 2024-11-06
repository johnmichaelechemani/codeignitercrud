<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if the user is logged in. This is a simple example using session.
        $session = session();
        if (!$session->get('isLoggedIn')) {
            $session->setFlashdata('error', 'You need to log in first.');
            // If the user is not logged in, redirect to the login page
            return redirect()->to('auth/login'); // Change '/login' to your actual login route
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here if needed after the request
    }
}
