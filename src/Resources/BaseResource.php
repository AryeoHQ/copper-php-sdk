<?php

namespace Aryeo\Copper\Resources;

use Aryeo\Copper\CopperClient;

abstract class BaseResource
{
    protected CopperClient $client;

    public function __construct(CopperClient $client)
    {
        $this->client = $client;
    }
}
