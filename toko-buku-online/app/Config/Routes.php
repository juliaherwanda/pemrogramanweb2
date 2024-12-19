<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//  HOME ROUTES
$routes->get('/', 'Home::index');
$routes->get('chart', 'Home::chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
$routes->get('submit', 'Home::submit');
$routes->get('images/(:segment)', 'Home::images/$1');


service('auth')->routes($routes);


// Admin
$routes->group('admin', ['filter' => 'group:admin'], function ($routes) {
  $routes->get('dashboard', 'AdminController::dashboard');
  $routes->get('databuku', 'AdminController::databuku');
  $routes->get('transaksi', 'AdminController::transaksi');
  $routes->get('pelanggan', 'AdminController::pelanggan');
  $routes->post('databuku', 'AdminController::create_buku');
  $routes->get('databuku/(:segment)/edit', 'AdminController::edit_buku/$1');
  $routes->post('databuku/(:segment)/update', 'AdminController::update_buku/$1');
  $routes->get('databuku/(:segment)/delete', 'AdminController::delete_buku/$1');
});
