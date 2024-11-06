<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//home
$routes->get('/', 'Home::index');
//test db connection
$routes->get('db-test', 'DatabaseTest::index');
//logout
$routes->get('auth/logout', 'Logout::logout');



$routes->group('auth', function ($routes) {
    //login
    $routes->get('login', 'Login::index');
    $routes->post('login', 'Login::login');
    //register
    $routes->get('register', 'Register::index');
    $routes->post('register', 'Register::store');
});

//user
$routes->group('user', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'UserController::dashboard');
    $routes->get('profile', 'UserController::profile');
    $routes->post('update-profile', 'UserController::update');
});
//admin
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('users', 'AdminController::listUsers');
    $routes->post('create-user', 'AdminController::createUser');
    $routes->get('settings', 'AdminController::settings');
    // add task
    $routes->get('dashboard', 'AdminController::indexTask');
    $routes->post('dashboard', 'AdminController::postTask');
});

