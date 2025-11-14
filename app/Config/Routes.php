<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('contact/send', 'Contact::send');
$routes->get('admin/messages', 'Admin::messages');
$routes->get('admin/delete/(:num)', 'Admin::delete/$1');

