<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function show(Car $car)
    {
        return $car;
    }
}
