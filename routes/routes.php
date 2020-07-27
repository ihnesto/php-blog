<?php

require __BLOG_WORK_DIR__ . '/inc/routing/Router.php';
require __BLOG_WORK_DIR__ . '/functions.php';

$router = new Router();

$router->get('/', 'home');
$router->get('/login', 'login');
$router->post('/login', 'login');
$router->get('/register', 'register');
$router->post('/register', 'register');
$router->post('/post/{id}/edit', 'post_edit');
