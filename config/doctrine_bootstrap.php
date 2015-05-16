<?php

$isDevMode = true;
$doctrine_config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/' . $config->application->modelsDir), $isDevMode);

$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../' . $config->database->dbname,
);

$entityManager = Doctrine\ORM\EntityManager::create($conn, $doctrine_config);

$di->set('entityManager', function () use ($entityManager) {
    return $entityManager;
});

