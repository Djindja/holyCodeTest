<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
     /**
     * Get Car
     *
     * @return Response
     */
    public function index(string $id)
    {
        return view('car')->with("id", $id);
    }
}