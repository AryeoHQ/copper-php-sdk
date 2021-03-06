<?php

namespace Aryeo\Copper\Resources;

use Illuminate\Support\Collection;

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

    public function upsert(array $payload)
    {
        return $this->client->put(self::PREFIX.'/upsert', $payload);
    }

    public function exists(string $email)
    {
        return Collection::make($this->search(['emails' => $email]))
            ->transform(fn ($lead) => [
                'id' => $lead['id'],
                'email' => $lead['email']['email'],
            ]);
    }
}
