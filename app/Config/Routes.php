<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/produtos', 'Home::produtos');
$routes->get('/sobre', 'Home::sobre');
$routes->get('/contato', 'Home::contato');
