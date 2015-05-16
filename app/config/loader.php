<?php

$loader = new \Phalcon\Loader();

$loader->registerNamespaces(
    array(
       'Models'    => "../app/models/",
    )
);

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir
    )
)->register();
