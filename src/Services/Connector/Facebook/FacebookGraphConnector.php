<?php

namespace App\Services\Connector\Facebook;

class FacebookGraphConnector
{
    public const string ID = 'facebook_v1';

    public function __construct(
        private readonly FacebookClientGraphInterface $facebookClientGraph
    ) {}
}
