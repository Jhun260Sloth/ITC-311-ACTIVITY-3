<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Shop', 'ShopController::Shop');

$routes->get('/prod/(:any)', 'ShopController::prod/$1');

$routes->get('/Login', 'ShopController::Login');

$routes->get('/Admin', 'ShopController::Admin');

$routes->get('/edit/(:any)', 'ShopController::edit/$1');

$routes->get('/delete/(:any)', 'ShopController::delete/$1');

$routes->get('/edit/(:any)', 'ShopController::edit/$1');

$routes->post('/insert', 'ShopController::insert');

