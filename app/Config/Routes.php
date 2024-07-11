<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
/* para abrir la pagina por defecto, y el hola lo que se escribira en la URL para abrirlo*/
$routes->get('hola', 'Home::prueba');


$routes->get('yo', 'Home::verOtra');
$routes->get('nueva', 'Home::nueva');
$routes->get('log', 'Home::login');