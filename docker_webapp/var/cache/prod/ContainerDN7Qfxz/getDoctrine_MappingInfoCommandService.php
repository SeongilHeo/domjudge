<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.mapping_info_command' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/InfoCommand.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/Command/Proxy/InfoDoctrineCommand.php';

$this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

$instance->setName('doctrine:mapping:info');

return $instance;
