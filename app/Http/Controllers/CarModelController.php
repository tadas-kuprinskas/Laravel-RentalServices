<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->brand_id) && $request->brand_id !== 0)
            $carModel = \App\Models\CarModel::where('brand_id', $request->brand_id)->orderBy('title')->get();
        else
            $carModel = \App\Models\CarModel::orderBy('title')->get();
        $brands = \App\Models\Brand::orderBy('title')->get();
        return view('car_model_index', ['car_models' => $carModel,
        'brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $brands = \App\Models\Brand::orderBy('title')->get();
        return view('car_model_create', ['brands' => $brands, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'popular_in' => 'required',
            'brand_id' => 'required',
        ]);
        
        $carModel = new CarModel();
        $carModel->fill($request->all());
        $carModel->save();
        return redirect()->route('car_model.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $carModel)
    {
        
        $brands = \App\Models\Brand::orderBy('title')->get();
        return view('car_model_edit', ['car_model' => $carModel, 'brands' => $brands]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarModel $carModel)
    {
        $request->validate([
            'title' => 'required',
            'popular_in' => 'required',
            'brand_id' => 'required'
        ]);

        $carModel->fill($request->all());
        $carModel->save();
        return redirect()->route('car_model.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $carModel)
    {
        $carModel->delete();
        return redirect()->route('car_model.index');

    }
}
