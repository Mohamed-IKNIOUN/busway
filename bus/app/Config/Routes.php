<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\BusController;

$routes->get('/', 'TrajetController::index');
$routes->post('/BusController/rechercherBus', 'TrajetController::rechercherBus');



// authentification 

//login
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginPost');

//signup
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::registerPost');

//logout
$routes->get('/logout', 'AuthController::logout');