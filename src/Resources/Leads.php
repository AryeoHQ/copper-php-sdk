<?php

namespace Aryeo\Copper\Resources;

class Leads extends BaseResource
{
    protected const PREFIX = 'leads';

    public function create(array $payload)
    {
        return $this->client->post(self::PREFIX, $payload);
    }

    public function search(array $params = [])
    {
        return $this->client->post(self::PREFIX.'/search', array_merge([
            'page_size' => 25,
            'sort_by' => 'name',
            ], $params));
    }

    public function upsert()
    {
    }

    public function exists(string $email)
    {
        $results = $this->search(['emails' => $email]);

        return (bool) count($results);
    }
}
