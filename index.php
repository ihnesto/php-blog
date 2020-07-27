<?php

const __BLOG_WORK_DIR__ = __DIR__;

require __BLOG_WORK_DIR__ . '/routes/routes.php';

$router->execute($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);
