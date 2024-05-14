<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Client::index');
$routes->get('/project', 'Client::project');
$routes->get('/contact', 'Client::contact');

$routes->get('/login', 'App::index');
$routes->post('/login', 'App::auth');
$routes->get('/logout', 'App::logout');
$routes->get('/darkmode/(:any)', 'App::darkmode/$1');

$routes->get('/admin/dashboard', 'App::dashboard', ['filter' => 'auth']); 
$routes->get('/admin/toko', 'App::toko', ['filter' => 'auth']);
$routes->get('/admin/karyawan', 'App::karyawan', ['filter' => 'auth']);