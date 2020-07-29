<?php

const __BLOG_WORK_DIR__ = __DIR__;

require_once __BLOG_WORK_DIR__ . '/logs/log_init.php';
require_once __BLOG_WORK_DIR__ . '/routes/routes.php';
require_once __BLOG_WORK_DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__BLOG_WORK_DIR__ .  '/templates');
$twig = new \Twig\Environment($loader);

$router->execute($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);
//$router->execute('get', '/login');
