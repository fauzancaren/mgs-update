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
$routes->post('/admin/toko/get', 'Datatable::gettoko', ['filter' => 'auth']); 
$routes->get('/admin/toko/add', 'AppMessage::toko_add', ['filter' => 'auth']); 
$routes->post('/admin/toko/add', 'AppMessage::toko_add_data', ['filter' => 'auth']);  
$routes->get('/admin/toko/edit/(:any)', 'AppMessage::toko_edit/$1', ['filter' => 'auth']); 
$routes->post('/admin/toko/edit/(:any)', 'AppMessage::toko_edit_data/$1', ['filter' => 'auth']); 
$routes->get('/admin/toko/show/(:any)', 'AppMessage::toko_show/$1', ['filter' => 'auth']); 
$routes->get('/admin/toko/delete/(:any)', 'AppMessage::toko_delete_data/$1', ['filter' => 'auth']); 

$routes->get('/admin/karyawan', 'App::karyawan', ['filter' => 'auth']);
$routes->post('/admin/karyawan/get', 'Datatable::getkaryawan', ['filter' => 'auth']);
$routes->get('/admin/karyawan/add', 'AppMessage::karyawan_add', ['filter' => 'auth']); 

$routes->get('/admin/vendor', 'App::vendor', ['filter' => 'auth']);
$routes->post('/admin/vendor/get', 'Datatable::getvendor', ['filter' => 'auth']);




