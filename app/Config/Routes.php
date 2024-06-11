<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'DashboardController::index');

// add these CRUD Routes
$routes->get('/listMahasiswa', 'MahasiswaCRUD::index');
$routes->post('/tambahData', 'MahasiswaCRUD::create');
$routes->post('/editData', 'MahasiswaCRUD::update');
$routes->get('/deleteData/(:any)', 'MahasiswaCRUD::delete/$1');