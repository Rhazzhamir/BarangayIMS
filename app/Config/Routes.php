<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes

// Homepage
$routes->get('/Homepage' , 'HomepageController::Homepage');

// Login & Register
$routes->get('/Login' , 'Login_RegisterController::Login' );
$routes->get('/Register' , 'Login_RegisterController::Register');

// AdminDashboard
$routes->get('/Admin/Dashboard', 'AdminDashboard::index');

// ResidentDashboard
$routes->get('/resident/create', 'ResidentRecordController::create');
$routes->post('/resident/store', 'ResidentRecordController::store');

$routes->get('/resident/edit/(:num)' , 'ResidentRecordController::EditResident/$1');
$routes->post('/resident/update/(:num)', 'ResidentRecordController::UpdateResident/$1');

$routes->post('resident/delete/(:num)', 'ResidentRecordController::DeleteResident/$1');

