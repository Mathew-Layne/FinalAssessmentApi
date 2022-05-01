<?php

namespace App\Http\Controllers;

use App\Models\rentedAddon;
use Illuminate\Http\Request;

class RentedAddonController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rented = rentedAddon::all();
        return response()->json($rented);
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
            'reservation_id' => 'required',
            'addon_id' => 'required'                        
        ]);
        
        $rented = rentedAddon::create($request->all());
        return response()->json([
            'message' => "Record Added",
            'data' => $rented
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
        $rented = rentedAddon::find($id);

        if(empty($rented)){
            return response()->json([
                'message' => 'Data Not Found'
            ]);
        }
            return $rented;
        
        
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
            'reservation_id' => 'required',
            'addon_id' => 'required',            
        ]);

        $rented = rentedAddon::findOrFail($id);
        $rented->update($request->all());
        return response([
            'message' => 'Updated Successfully',
            'data' => $rented,
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
        rentedAddon::find($id)->delete();
        return response([
            'message' => "Data Deleted"
        ]);
    }
}
