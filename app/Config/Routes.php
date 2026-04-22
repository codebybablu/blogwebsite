<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// Auth
$routes->get('/login', 'Auth::login');
$routes->post('/loginCheck', 'Auth::loginCheck');
$routes->get('/signup', 'Auth::signup');
$routes->post('/register', 'Auth::register');

// Dashboard
$routes->get('/dashboard', 'Home::dashboard', ['filter'=>'auth']);

// Admin Posts
$routes->get('/admin/posts', 'Post::index', ['filter'=>'admin']);
$routes->get('/admin/posts/create', 'Post::create', ['filter'=>'admin']);
$routes->post('/admin/posts/store', 'Post::store', ['filter'=>'admin']);

// Frontend
$routes->get('/', 'Home::index');
$routes->get('/blog/(:any)', 'Home::singleBlog/$1');