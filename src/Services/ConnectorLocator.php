<?php

namespace App\Services;

use App\Services\Connector\Facebook\FacebookGraphConnector;
use App\Services\Connector\FacebookV2\FacebookGraphConnectorV2;
use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

class ConnectorLocator implements ServiceSubscriberInterface
{
    public function __construct(
        private readonly ContainerInterface $locator,
    ) {
    }

    public static function getSubscribedServices(): array
    {
        return [
            FacebookGraphConnector::ID => FacebookGraphConnector::class,
            FacebookGraphConnectorV2::ID => FacebookGraphConnectorV2::class,
        ];
    }
}
