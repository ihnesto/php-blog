<?php

require_once __BLOG_WORK_DIR__ . '/inc/routing/Router.php';
require_once __BLOG_WORK_DIR__ . '/functions.php';

$router = new Router($logger, []);

$router->get('/', 'home');
$router->get('/login', 'login');
$router->post('/login', 'login');
$router->get('/register', 'register');
$router->post('/register', 'register');
$router->post('/post/{id}/edit', 'post_edit');

