<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/inicio', 'Home::inicio');
// $routes->post('/login', 'Home::login');
// $routes->get('/salir', 'Home::salir');

// $routes->get('/pelicula','Pelicula::index');
// $routes->get('pelicula/new','Pelicula::create');
// $routes->get('pelicula/edit/(num)','Pelicula::create/$1');


//$routes->presenter('pelicula',['controller'=> 'Pelicula']);
//$routes->presenter('categoria',['controller'=>'Dashboard\Categoria']);
//,['controller'=>'Dashboard\Pelicula']

$routes->group('dashboard', function($routes) {
    $routes->presenter('pelicula', ['controller' => 'Dashboard\Pelicula']);
    $routes->presenter('categoria', ['controller' => 'Dashboard\Categoria']);
});