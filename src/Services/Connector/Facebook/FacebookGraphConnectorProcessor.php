<?php

namespace App\Services\Connector\Facebook;

use App\Services\HttpClient;

class FacebookGraphConnectorProcessor
{
    public function __construct(
        private readonly HttpClient $facebookClientGraph
    )
    {

    }
}
