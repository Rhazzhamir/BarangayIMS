<?php

use App\Controllers\OfficialController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes

// Lockscreen
$routes->get('/' , 'LockscreenController::create');
// Homepage
$routes->get('/Homepage' , 'HomepageController::Homepage');

// Login & Register
$routes->get('/Login' , 'Login_RegisterController::Login' );
$routes->get('/Register' , 'Login_RegisterController::Register');

// AdminDashboard
$routes->get('/Admin/Dashboard', 'AdminDashboard::index'); 

$routes->get('/Admin/Dashboard/countResident', 'AdminDashboard::countResident');


// ResidentDashboard
$routes->get('/resident/create', 'ResidentRecordController::create');

$routes->post('/resident/store', 'ResidentRecordController::store');

$routes->get('/resident/edit/(:num)' , 'ResidentRecordController::EditResident/$1');
$routes->post('/resident/update/(:num)', 'ResidentRecordController::UpdateResident/$1');

$routes->post('resident/delete/(:num)', 'ResidentRecordController::DeleteResident/$1');


// Budget
$routes->get('/Budget/create' , 'BudgetController::create');
$routes->post('/Budget/store' , 'BudgetController::store');


//Official
$routes->get('/Officials' , 'OfficialController::create');
$routes->post('/officials/store' , 'OfficialController::store');