<?php

namespace Aryeo\Copper\Resources;

use Illuminate\Support\Collection;

class CustomerSources extends BaseResource
{
    protected const PREFIX = 'customer_sources';

    public function get()
    {
        return Collection::make(
            $this->client->get(self::PREFIX)
        );
    }
}
