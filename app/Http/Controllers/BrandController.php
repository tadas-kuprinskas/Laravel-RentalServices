<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->brands_id) && $request->brands_id !== 0)
            $brands = \App\Models\Brand::where('brand_id', $request->brand_id)->orderBy('title')->get();
        else
            $brands = \App\Models\Brand::orderBy('year', 'desc')->get();
        $car_models = \App\Models\CarModel::orderBy('title')->get();
        $clients = \App\Models\Client::orderBy('surname')->get();

        return view('brands_index', [
            'brands' => $brands,
            'car_models' => $car_models,
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands_create');
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
            'country' => 'required',
            'year' => 'required'
        ]);

        $brand = new Brand();
        $brand->fill($request->all());
        $brand->save();
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brand_edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'title' => 'required',
            'country' => 'required',
            'year' => 'required'
        ]);

        $brand->fill($request->all());
        $brand->save();
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index');
    }
}
