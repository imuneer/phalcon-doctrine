<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

try {

    /**
     * Read the configuration
     */
    $config = new \Phalcon\Config\Adapter\Ini(__DIR__ . "/config.ini");

    /**
     * Read auto-loader
     */
    include __DIR__ . "/../app/config/loader.php";

    /**
     * Read services
     */
    include __DIR__ . "/../app/config/services.php";

    /**
     * Doctrine entity manager
     */
    include __DIR__ . "/doctrine_bootstrap.php";

    /**
     * Handle the request
     */
    $entityManager = $entityManager; // no need

    return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);


} catch (\Exception $e) {
    echo $e->getMessage();
}
