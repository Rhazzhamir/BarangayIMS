<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes
$routes->get('/', 'Home::index');

$routes->get('/resident/create', 'ResidentRecordController::create');
$routes->post('/resident/store', 'ResidentRecordController::store');
