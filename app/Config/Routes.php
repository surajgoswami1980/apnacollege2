<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('*', 'Home::error404');

$routes->group('courses', ['namespace' => 'App\Controllers\courses'], ['filter' => 'noauth'], function ($routes) {
    $routes->get('delta', 'courses::delta');
    $routes->get('sigma', 'courses::sigma');
    $routes->get('cpp-dsa', 'courses::cppdsa');

});
$routes->get('dashboard', 'Home::dashboard',['filter' => 'auth']);
$routes->match(['get', 'post'], 'register', 'LoginRegister::register',['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'LoginRegister::login',['filter' => 'noauth']);
$routes->get('logout', 'LoginRegister::logout',['filter' => 'auth']);
$routes->get('homelogin', 'LoginRegister::homelogin',['filter' => 'auth']);


$routes->get('payment', 'PaymentController::index');
$routes->post('initiate', 'PaymentController::initiate');
$routes->get('verify', 'PaymentController::verify');

