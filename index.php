<?php

require 'routes.php';

$router->execute($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);
