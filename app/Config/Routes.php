<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('tasks', 'TaskController::index');
$routes->get('profile', 'Users::profile');
$routes->get('about', 'About::index');

$routes->get('customers', 'Customers::index');