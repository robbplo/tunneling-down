<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return CarResource::collection(Car::all());
    }

    public function show(Car $car)
    {
        return new CarResource($car->load('brand'));
    }
}
