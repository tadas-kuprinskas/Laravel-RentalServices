<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarDetail extends Controller
{
    public function index(Request $request)
    {
        
        $brands = \App\Models\Brand::orderBy('year', 'desc')->get();
        $car_models = \App\Models\CarModel::orderBy('title')->get();
        $clients = \App\Models\Client::orderBy('surname')->get();
       
        return view('car_details', [
            'brands' => $brands, 
            'car_models' => $car_models,
            'clients' => $clients,
            ]);
    }
}
