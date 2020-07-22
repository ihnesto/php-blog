<?php

require 'inc/Router.php';
require 'functions.php';

$router = new Router();

$router->get('/', home);
$router->get('/login', login);
$router->post('/login', login);
$router->get('/register', register);
$router->post('/register', register);
$router->post('/post/{id}/edit', post_edit);
