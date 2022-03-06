<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Team\ClarificationController' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/Team/ClarificationController.php';

$this->services['App\\Controller\\Team\\ClarificationController'] = $instance = new \App\Controller\Team\ClarificationController(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()), ($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')));

$instance->setContainer(($this->privates['.service_locator.amdXAV_'] ?? $this->load('get_ServiceLocator_AmdXAVService.php'))->withContext('App\\Controller\\Team\\ClarificationController', $this));

return $instance;