<?php

namespace App\Http\Controllers;

use App\Models\addon;
use Illuminate\Http\Request;

class AddonController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addon = addon::all();
        return response()->json($addon);
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
            'price' => 'required'                        
        ]);
        
        $addon = addon::create($request->all());
        return response()->json([
            'message' => "Addon Added",
            'data' => $addon
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
        $addon = addon::find($id);

        if(empty($addon)){
            return response()->json([
                'message' => 'Data Not Found'
            ]);
        }
            return $addon;
        
        
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
            'price' => 'required',            
        ]);

        $addon = addon::findOrFail($id);
        $addon->update($request->all());
        return response([
            'message' => 'Updated Successfully',
            'data' => $addon,
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
        addon::find($id)->delete();
        return response([
            'message' => "Data Deleted"
        ]);
    }
}
