<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarBuilder;
use App\Http\Exceptions\HttpException;

class CarController extends Controller
{
     /**
     * Get Car
     *
     * @return Response
     */
    public function index(int $id)
    {
        try {
            $car = CarBuilder::build($id);
            return view('car', ['car' => $car])->with("id", $id);
        } catch(HttpException $e) {
            return $e->getMessage();
        }
    }
}