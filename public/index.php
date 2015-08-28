<?php
define('APP_DIR', __DIR__ . '/../app');

require __DIR__ . '/../vendor/autoload.php';

// Bootstrap the application
$settings = require APP_DIR . '/settings.php';
$app = new \Slim\App($settings);

require APP_DIR . '/middleware.php';
require APP_DIR . '/routes.php';

$app->run();
