<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;
use App\Clients;

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
        $result = Vehicle::orderBy('vehicle_id','asc')
        ->paginate(10);

        return view('dashboard.vehicle', compact('result'));
    }

    public function vehicle_profile($id){
        
        $x['id'] = $id;

        $result = Vehicle::orderBy('vehicles.vehicle_id', 'desc')
        ->join('clients','clients.client_id','vehicles.client_id')
        ->where('vehicles.vehicle_id', '=' , $x)
        ->select('vehicles.*', 'clients.*')
        ->paginate(10);

        $name = Vehicle::orderBy('vehicles.vehicle_id', 'desc')
        ->where('vehicles.vehicle_id', '=', $x)
        ->select('vehicles.plate_no as plate')
        ->paginate(10);

        return view('dashboard.vehicle_profile', compact('result', 'name'));
    }

    public function new_vehicle()
    {
        //$clients = Clients::paginate(15);
        $clients = Clients::all()->pluck('full_name', 'client_id');

        return view('dashboard.vehicle_new', compact('clients'));
    }

    public function insert(Request $request)
    {
        //firstname, lastname, contact_no, age, email, created_at, updated_at
        $id = $request -> client_id;
                $data = array('client_id'=>$id,
                              'plate_no'=>$request->plateno,
                              'type'=>$request->type,
                              'model'=>$request->model,
                              'color'=>$request->color,
                              'description'=>$request->desc,
                              'date_created'=>date('Y-m-d H:i:s'));
                Vehicle::insert($data);
        return back();
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
        //
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
        //
    }
}
