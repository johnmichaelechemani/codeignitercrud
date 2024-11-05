<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('db-test', 'DatabaseTest::index');


$routes->group('user', function ($routes) {
    $routes->get('dashboard', 'UserController::dashboard');      // User dashboard
    $routes->get('profile', 'UserController::profile');          // User profile
    $routes->post('update-profile', 'UserController::update');   // Update profile
});


$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');       // Admin dashboard
    $routes->get('users', 'AdminController::listUsers');           // List all users
    $routes->post('create-user', 'AdminController::createUser');   // Create a new user
    $routes->get('settings', 'AdminController::settings');         // Admin settings
});
