<?php

namespace Aryeo\Copper\Resources;

class Users extends BaseResource
{
    protected const PREFIX = 'users';

    public function get($user_id)
    {
        return $this->client->get(self::PREFIX."/{$user_id}");
    }

    public function search()
    {
        return $this->client->post(self::PREFIX.'/search');
    }
}
