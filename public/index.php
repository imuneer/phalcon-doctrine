<?php

error_reporting(E_ALL);

try {

    /**
     * Read the configuration
     */
    $config = new \Phalcon\Config\Adapter\Ini(__DIR__ . "/../config/config.ini");

    /**
     * Read auto-loader
     */
    include __DIR__ . "/../app/config/loader.php";
    require_once __DIR__ . "/../vendor/autoload.php";

    /**
     * Read services
     */
    include __DIR__ . "/../app/config/services.php";

    /**
     * Adding doctrine bootstrap
     * $this generate the following variable
     * @var $entityManager \Doctrine\ORM\EntityManager
     */
    include __DIR__ . "/../config/doctrine_bootstrap.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage();
}
