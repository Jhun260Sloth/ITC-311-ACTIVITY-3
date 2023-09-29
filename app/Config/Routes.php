<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Shop', 'ShopController::Shop');

$routes->get('/Login', 'ShopController::Login');

$routes->get('/Admin', 'ShopController::Admin');

