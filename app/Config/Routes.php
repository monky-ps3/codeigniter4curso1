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
   // $routes->get('usuario/crear','\App\Controllers\Web\Usuario::crear_usuario');
});


$routes->group('acceso', function($routes) {
    $routes->presenter('usuarios', ['controller' => 'Web\Usuarios']);
 
   // $routes->get('usuario/crear','\App\Controllers\Web\Usuario::crear_usuario');
});


//$routes->get('login','\App\Controllers\Web\Usuario::login',['as'=>'usuario.login']);
$routes->get('login', '\App\Controllers\Web\Usuario::login', ['as' => 'usuario.login']);
$routes->get('register', '\App\Controllers\Web\Usuario::register', ['as' => 'usuario.register']);
//$routes->presenter('login', ['controller' => 'Web\Usuario']);



//$routes->post('login_post', '\App\Controllers\Web\Usuario::login_post', ['as' => 'usuario.login_post']);
$routes->post('usuario/login_post', '\App\Controllers\Web\Usuario::login_post', ['as' => 'usuario.login_post']);
$routes->post('usuario/register_post', '\App\Controllers\Web\Usuario::register_post', ['as' => 'usuario.register_post']);

$routes->get('logout', '\App\Controllers\Web\Usuario::logout', ['as' => 'usuario.logout']);
//$routes->post('login_post','\App\Controllers\Web\Usuario::login_post',['as'=>'usuario.login_post']);