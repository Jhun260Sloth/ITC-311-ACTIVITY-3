<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Shop', 'ShopController::Shop');

$routes->get('/prod/(:any)', 'ShopController::prod/$1');

$routes->get('/Login', 'ShopController::Login');

$routes->get('/Register', 'ShopController::Register');

$routes->get('/Admin', 'ShopController::Admin', ['filter' => 'authGuard']);

$routes->get('/Shop', 'ShopController::Shop');

$routes->get('/edit/(:any)', 'ShopController::edit/$1');

$routes->get('/delete/(:any)', 'ShopController::delete/$1');

$routes->get('/info/(:any)', 'ShopController::info/$1');

$routes->post('/insert', 'ShopController::insert');

