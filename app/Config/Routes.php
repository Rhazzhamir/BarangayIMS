<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes
$routes->get('/', 'Home::index');

$routes->get('/resident/create', 'ResidentRecordController::create');
$routes->post('/resident/store', 'ResidentRecordController::store');

$routes->get('/resident/edit/(:num)' , 'ResidentRecordController::EditResident/$1');
$routes->post('/resident/update', 'ResidentRecordController::UpdateResident');