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
});
//admin


$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    // Admin Task Management
    $routes->get('dashboard', 'AdminController::indexTask');
    $routes->post('dashboard', 'AdminController::postTask');
    // $routes->get('admin/edit_task/(:num)', 'AdminController::editTask/$1');
    // $routes->post('admin/update_task/(:num)', 'AdminController::updateTask/$1');
    $routes->get('delete_task/(:num)', 'AdminController::deleteTask/$1');

});

// app/Config/Routes.php
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->get('dashboard', 'AdminDashboardController::index');
    $routes->post('dashboard', 'AdminDashboardController::create');
});