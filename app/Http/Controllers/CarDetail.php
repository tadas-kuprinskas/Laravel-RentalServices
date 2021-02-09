<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarDetail extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->brands_id) && $request->brands_id !== 0)
            $brands = \App\Models\Brand::where('brand_id', $request->brand_id)->orderBy('title')->get();
        else
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
