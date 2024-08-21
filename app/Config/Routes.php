<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kandang', 'Home::kandang');
$routes->get('/datatelur', 'Home::datatelur');
$routes->get('/datavitamin', 'Home::datavitamin');
$routes->get('/laporan', 'Home::laporan');


