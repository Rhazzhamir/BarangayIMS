<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes
$routes->get('/', 'Home::index');

$routes->get('/resident', 'ResidentRecordController::index');
$routes->post('/resident/store', 'ResidentRecordController::store');
