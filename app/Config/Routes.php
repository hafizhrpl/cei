<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kandang', 'Home::kandang');
$routes->get('/detailkandang', 'Home::detailkandang');
$routes->get('/detailminggu', 'Home::detailminggu');
$routes->get('/laporan', 'Home::laporan');


