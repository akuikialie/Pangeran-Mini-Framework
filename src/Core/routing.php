<?php

$app->get('/', function() use ($app) {
    $controller = new Pangeran\HomePageBundle\Controller\HomeController($app);
    $controller->homeAction();
});
