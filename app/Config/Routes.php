<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//test db
$routes->get('db-test', 'DatabaseTest::index');

//login
$routes->get('login', 'Login::login');      // Display the login form
$routes->post('login', 'Login::login');     // Handle login form submission

//user
$routes->group('user', function ($routes) {
    $routes->get('dashboard', 'UserController::dashboard');      // User dashboard
    $routes->get('profile', 'UserController::profile');          // User profile
    $routes->post('update-profile', 'UserController::update');   // Update profile
});
//admin
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'AdminController::listUsers'); // Admin dashboard
    $routes->get('users', 'AdminController::listUsers');     // List all users
    $routes->post('create-user', 'AdminController::createUser'); // Create a new user
    $routes->get('settings', 'AdminController::settings');     // Admin settings
});
