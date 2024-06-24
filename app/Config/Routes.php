<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// // BASIC CRUD
// $routes->get('/dashboard', 'DashboardController::index');

// // add these CRUD Routes
// $routes->get('/listMahasiswa', 'MahasiswaCRUD::index');
// $routes->post('/tambahData', 'MahasiswaCRUD::create');
// $routes->post('/editData', 'MahasiswaCRUD::update');
// $routes->get('/deleteData/(:any)', 'MahasiswaCRUD::delete/$1');

$routes->group("/",
    $routes->get('/', 'project_uas\ViewController::login'),
    $routes->get('/logout', 'project_uas\ViewController::logout'),
    $routes->get('/register', 'project_uas\ViewController::register'),
    $routes->get('/createPassword', 'project_uas\ViewController::createPassword'),
    
    $routes->post('/createPW', 'project_uas\CRUD::createPW'),

    $routes->get('/dashboard', 'project_uas\ViewController::dashboard'),
    $routes->get('/dashboardMember', 'project_uas\ViewController::dashboardMember'),
    $routes->get('/listMember', 'project_uas\ViewController::listMember'),
    $routes->get('/listKelas', 'project_uas\ViewController::listKelas'),

    $routes->post('/checkLogin', 'project_uas\ViewController::checkLogin'),
    $routes->post('/addMember', 'project_uas\CRUD::create'),

    $routes->post('/editMembership', 'project_uas\CRUD::updateMembership'),

    $routes->post('/tambahMember', 'project_uas\CRUD::createUser'),
    $routes->post('/tambahKelas', 'project_uas\CRUD::createKelas'),
    
    $routes->post('/editMember', 'project_uas\CRUD::updateMember'),
    $routes->post('/editKelas', 'project_uas\CRUD::updateKelas'),

    $routes->get('/deleteMember/(:any)', 'project_uas\CRUD::deleteMember/$1'),
    $routes->get('/deleteKelas/(:any)', 'project_uas\CRUD::deleteKelas/$1'),
);

$routes->group("/baseDisplay",function($routes) {
    $routes->get('1', 'baseDisplay::home');
    $routes->get('2', 'baseDisplay::table');
});