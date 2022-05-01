<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veicle = Vehicle::with('vehicleBrand', 'vehicleCategory')->get();
        return response()->json($veicle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required', 
            'transmission' => 'required', 
            'mileage' => 'required', 
            'fuel' => 'required', 
            'year' => 'required', 
            'img' => 'required', 
            'price' => 'required',
            'vehicle_brand_id' => 'required', 
            'vehicle_category_id' => 'required' 
        ]);
        
        $vehicle = Vehicle::create($request->all());
        return response()->json([
            'message' => "New Vehicle Added",
            'data' => $vehicle
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);

        if(empty($vehicle)){
            return response()->json([
                'message' => 'Data Not Found'
            ]);
        }
            return $vehicle;
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required', 
            'transmission' => 'required', 
            'mileage' => 'required', 
            'fuel' => 'required', 
            'year' => 'required', 
            'price' => 'required',
            'vehicle_brand_id' => 'required', 
            'vehicle_category_id' => 'required' 
        ]);

        $response = Vehicle::findOrFail($id);
        $response->update($request->all());
        return response([
            'message' => 'Updated Successfully',
            'data' => $response,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehicle::find($id)->delete();
        return response([
            'message' => "Data Deleted"
        ]);
    }
}
