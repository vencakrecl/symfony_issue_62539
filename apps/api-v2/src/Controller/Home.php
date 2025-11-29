<?php

namespace ApiV2\Controller;

use App\Services\ConnectorLocator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
class Home
{
    public function __construct(private readonly ConnectorLocator $connectorLocator) {

    }

    public function __invoke(): Response {
        return new Response('Hello World V2!');
    }
}
