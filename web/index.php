<?php

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\Slim();

/* HERE SET THE CONFIG */
require __DIR__.'/../src/Core/config.php';

/* HERE SET THE SERVICE*/
require __DIR__.'/../src/Core/service.php';

/* HERE THE ROUTING */
require __DIR__.'/../src/Core/routing.php';

$app->run();
