<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection($app->settings['database']);
$capsule->setAsGlobal();
$capsule->bootEloquent();
