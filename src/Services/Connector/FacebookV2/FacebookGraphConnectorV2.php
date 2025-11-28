<?php

namespace App\Services\Connector\FacebookV2;

use App\Services\Connector\Facebook\FacebookClientGraphInterface;

class FacebookGraphConnectorV2
{
    public const string ID = 'facebook_v2';

    public function __construct(
        private readonly FacebookClientGraphInterface $facebookClientGraph
    ) {}
}
