<?php

namespace Aryeo\Copper\Resources;

class Account extends BaseResource
{
    protected const PREFIX = 'account';

    public function get()
    {
        return $this->client->get(self::PREFIX);
    }
}
