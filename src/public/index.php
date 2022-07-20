<?php

require_once './class/Router.php';

$router = new Router();

Router::route('/', function () {
    require_once '../app/views/index.php';
});

Router::route('/contact', function () {
    require_once '../app/views/contact.php';
});

Router::route('/404', function () {
    echo "Page not found";
});

Router::run();
