<?php

namespace Aryeo\Copper;

use GuzzleHttp\Client;

class CopperClient
{
    protected static string $base_uri = 'https://api.prosperworks.com/developer_api/v1/';

    protected Client $client;

    public function __construct($access_token, $user_email)
    {
        $this->client = new Client([
            'base_uri' => self::$base_uri,
            'headers' => [
                'X-PW-AccessToken' => $access_token,
                'X-PW-Application' => 'developer_api',
                'X-PW-UserEmail' => $user_email,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);
    }

    /**
     * Make GET request.
     *
     * @param $path
     */
    public function get($path, array $query = [], array $headers = []): array
    {
        return $this->request('get', $path, $query, $headers);
    }

    /**
     * Make POST request.
     *
     * @param $path
     */
    public function post($path, array $params = [], array $headers = []): array
    {
        return $this->request('post', $path, $params, $headers);
    }

    /**
     * Make PUT request.
     *
     * @param $path
     */
    public function put($path, array $params = [], array $headers = []): array
    {
        return $this->request('put', $path, $params, $headers);
    }

    /**
     * Make DELETE request.
     *
     * @param $path
     */
    public function delete($path, array $headers = []): array
    {
        return $this->request('delete', $path, $headers);
    }

    public function request($method, $path, array $data = [], array $headers = []): array
    {
        $method = strtoupper($method);

        $key = $method === 'GET' ? 'query' : 'json';

        $request = $this->client->request($method, $path, [
            $key => $data,
            'headers' => $headers,
        ]);

        $response = json_decode($request->getBody(), true);

        return $response;
    }
}
