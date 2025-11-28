<?php

namespace App\Services\Connector\FacebookV2;

use App\Services\HttpClient;

class FacebookGraphConnectorV2Processor
{
    public function __construct(
        private readonly HttpClient $facebookClientGraph
    )
    {

    }
}
