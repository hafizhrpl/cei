<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::tambah');
$routes->get('home/tambah', 'Home::Tambah');


$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard', 'Dashboard::tambah');
$routes->get('dashboard/tambah', 'Dashboard::tambah');


