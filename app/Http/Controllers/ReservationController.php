<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = reservation::all();
        return response()->json($reservation);
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
            'pickup_location' => 'required',
            'pickup_date' => 'required',
            'dropoff_location' => 'required',
            'dropoff_date' => 'required',
            'user_id' => 'required',
            'vehicle_id' => 'required'             
        ]);
        
        $reservation = reservation::create($request->all());
        return response()->json([
            'message' => "Reservation Added",
            'data' => $reservation
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
        $reservation = reservation::find($id);

        if(empty($reservation)){
            return response()->json([
                'message' => 'Data Not Found'
            ]);
        }
            return $reservation;
        
        
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
            'pickup_location' => 'required',
            'pickup_date' => 'required',
            'dropoff_location' => 'required',
            'dropoff_date' => 'required',
            'user_id' => 'required',
            'vehicle_id' => 'required'
        ]);

        $reservation = reservation::findOrFail($id);
        $reservation->update($request->all());
        return response([
            'message' => 'Updated Successfully',
            'data' => $reservation,
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
        reservation::find($id)->delete();
        return response([
            'message' => "Data Deleted"
        ]);
    }
}
