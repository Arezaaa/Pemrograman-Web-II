<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
	
$routes->get('/', 'Home::index',);
$routes->get('/buku', 'Buku::index',);
$routes->get('/buku/(:any)', 'Buku::viewBuku/$1',);

$routes->group('admin',['filter' => 'authenticate'], function($routes){
	$routes->get('buku', 'BukuAdmin::index');
	$routes->get('buku/(:segment)/preview', 'BukuAdmin::preview/$1');
    $routes->add('buku/new', 'BukuAdmin::create');
	$routes->add('buku/(:segment)/edit', 'BukuAdmin::edit/$1');
	$routes->get('buku/(:segment)/delete', 'BukuAdmin::delete/$1');
});

$routes->group('register', function($routes){
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});

$routes->group('login', ['filter' => 'redirectIfAuthenticated'], function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});

$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});