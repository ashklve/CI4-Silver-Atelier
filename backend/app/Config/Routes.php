<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Users::signup');

// Signup form submission
$routes->post('/auth/register', 'Auth::register');

// Terms and Privacy pages
$routes->get('/terms', 'Users::terms');
$routes->get('/privacy', 'Users::privacy');
