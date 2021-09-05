<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\API\TeamController' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Controller/AbstractFOSRestController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/API/AbstractRestController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/API/TeamController.php';

$this->services['App\\Controller\\API\\TeamController'] = $instance = new \App\Controller\API\TeamController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()));

$instance->setContainer(($this->privates['.service_locator.iA4UqQm'] ?? $this->load('get_ServiceLocator_IA4UqQmService.php'))->withContext('App\\Controller\\API\\TeamController', $this));

return $instance;
