<?php

namespace Aryeo\Copper\Resources;

class CustomerSources extends BaseResource
{
    protected const PREFIX = 'customer_sources';

    public function get()
    {
        return $this->client->get(self::PREFIX);
    }
}
