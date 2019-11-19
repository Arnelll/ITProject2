<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Vehicle::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'plate_number' => ['required', 'string', 'max:9'],
            'type' => ['required', 'string', 'max:155'],
            'description' => ['nullable', 'string', 'max:255'],
            'client_id' => ['required', 'numeric', 'max:15'],
        ]);

        return Vehicle::create([
            'plate_number' => $request['plate_number'],
            'type' => $request['type'],
            'description' => $request['description'],
            'client_id' => $request['client_id'],
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $vehicle = Vehicle::findOrFail($id);

        $vehicle -> delete();

        return ['message' => 'Vehicle record deleted'];

    }
}
