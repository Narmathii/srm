<?php

use CodeIgniter\Router\RouteCollection;

/**h
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');

$routes->get('products/(:segment)', 'Home::products/$1');
$routes->get('details/(:segment)', 'Home::productsDetails/$1');
$routes->get('/products', 'Home::productsMain');

$routes->get('/contact', 'Home::contact');
$routes->get('/about', 'Home::about');
$routes->get('/gallery', 'Home::gallery');



