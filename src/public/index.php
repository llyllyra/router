<?php

 require_once './class/router.php';

$router = new \app\Router($_GET['url']);

$router->run();

