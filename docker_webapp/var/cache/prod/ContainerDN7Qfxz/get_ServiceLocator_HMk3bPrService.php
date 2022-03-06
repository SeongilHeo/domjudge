<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.HMk3bPr' shared service.

return $this->privates['.service_locator.HMk3bPr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'balloonService' => ['privates', 'App\\Service\\BalloonService', 'getBalloonServiceService.php', true],
    'eventLogService' => ['privates', 'App\\Service\\EventLogService', 'getEventLogServiceService', false],
    'scoreboardService' => ['privates', 'App\\Service\\ScoreboardService', 'getScoreboardServiceService', false],
], [
    'balloonService' => 'App\\Service\\BalloonService',
    'eventLogService' => 'App\\Service\\EventLogService',
    'scoreboardService' => 'App\\Service\\ScoreboardService',
]);