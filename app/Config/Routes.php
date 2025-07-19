<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', function ($routes) {
    $routes->get('menus', 'Api\MenuController::index');
    $routes->get('menus/(:num)', 'Api\MenuController::show/$1');

    $routes->get('categories', 'Api\CategoryController::index');

    $routes->get('blogs', 'Api\BlogController::index');
    $routes->get('blogs/(:segment)', 'Api\BlogController::show/$1');

    $routes->get('contacts', 'Api\ContactController::index');

    $routes->get('price-list', 'Api\PriceListController::index');
});

$routes->group('admin', function($routes) {
    $routes->get('login', 'AuthController::loginForm');
    $routes->post('login', 'AuthController::login');
    $routes->get('logout', 'AuthController::logout');
});