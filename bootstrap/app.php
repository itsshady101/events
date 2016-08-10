<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

$settings = require __DIR__ . '/../config/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/dependency.php';
require __DIR__ . '/database.php';
require __DIR__ . '/../App/routes.php';

$app->run();