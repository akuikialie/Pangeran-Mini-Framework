<?php

$app->container->singleton('Pdo', function() use ($config){ 
    return new PDO('mysql:host='.$config['dbhost'].';dbname='.$config['dbname'], $config['dbuser'], $config['dbpass']);
});

$app->container->singleton('Plates', function() use ($config) {
    return new League\Plates\Engine($config['plates_dir']);
});
