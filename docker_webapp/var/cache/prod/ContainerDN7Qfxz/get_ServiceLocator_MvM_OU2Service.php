<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.MvM.OU2' shared service.

return $this->privates['.service_locator.MvM.OU2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'balloonService' => ['privates', 'App\\Service\\BalloonService', 'getBalloonServiceService.php', true],
], [
    'balloonService' => 'App\\Service\\BalloonService',
]);