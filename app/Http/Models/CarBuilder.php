<?php

namespace App\Models;

use GuzzleHttp\Client;
use App\Http\Exceptions\HttpException;

class CarBuilder
{
    public static function build(int $id):Car
    {
        $httpWrapper = new HttpWrapper();
        $response = $httpWrapper->get("/vehicle-ad/{$id}.json");
        $data = json_decode($response->getBody())->data;

        $car = new Car($data);
        return $car;
    }
}