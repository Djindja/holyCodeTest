<?php

namespace App\Models;

use App\Http\Exceptions\HttpException;
use \GuzzleHttp\Client as Client;

class HttpWrapper
{
    private $client;

    public function __construct(Client $client = null) {
        if ($client == null) {
            $client = new Client();
        }

        $this->client = $client;
    }

    public function get(string $path) {
        try {
            return $this->client->request('GET', env("API_HOST") . "{$path}");
        } catch(\GuzzleHttp\Exception\ClientException $e) {
            throw new HttpException($e->getMessage(), $e->getResponse()->getStatusCode());
        }
    }
}