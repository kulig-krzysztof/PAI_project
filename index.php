<?php

require 'routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('actions', 'DefaultController');
Routing::get('categories', 'DefaultController');
Routing::get('add', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('results', 'AddController');
Routing::post('login', 'SecurityController');
Routing::post('register', 'AddUserController');
Routing::post('add', 'AddController');
Routing::post('search', 'AddController');
Routing::post('cat', 'AddController');
Routing::run($path);