<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.App\Command\ImportEventFeedCommand' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/src/Command/ImportEventFeedCommand.php';

return $this->services['console.command.public_alias.App\\Command\\ImportEventFeedCommand'] = new \App\Command\ImportEventFeedCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()), ($this->privates['App\\Service\\ScoreboardService'] ?? $this->getScoreboardServiceService()), ($this->privates['App\\Service\\SubmissionService'] ?? $this->getSubmissionServiceService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), false, '7.3.3');
