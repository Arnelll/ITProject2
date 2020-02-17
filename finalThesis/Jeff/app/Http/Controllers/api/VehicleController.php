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

        $id = Vehicle::where('vehicles.vehicle_id','=', $x)
        ->first();

        $clients = Clients::orderBy('client_id','asc')
        ->get();

        return view('dashboard.vehicle_profile', compact('result', 'name','id','clients'));
    }

    public function change_owner($id){
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

        $id = Vehicle::where('vehicles.vehicle_id','=', $x)
        ->join('clients','clients.client_id','vehicles.client_id')
        ->first();
        
        return view('dashboard.change_owner', compact('result','name','id'));
    }

    public function change_own(Request $request){
        $fn = $request->fn;
        $ln = $request->ln;
        $address = $request->address;
        $email = $request->email;
        $phone = $request->phone;
        $vId = $request->vId;

        $client = new Clients;
        $client -> firstname=$fn;
        $client -> lastname=$ln;
        $client -> address=$address;
        $client -> email=$email;
        $client -> contact_no=$phone;
        if($client->save()){
            $vehicle = new Vehicle;
            $cId = $client->client_id;
            $vehicle=Vehicle::where('vehicle_id',$vId)->first();
            $vehicle -> client_id =$cId;
            $vehicle->save();
        }

        return $this->index();
    }

    public function change_own2(Request $request){
        $vId = $request->vId;
        $cId = $request->cId;
        $vehicle = Vehicle::where('vehicle_id',$vId)
        ->first();
        $vehicle->client_id = $cId;
        $vehicle->save();
        return $this->index();
    }

    public function new_vehicle()
    {
        //$clients = Clients::paginate(15);
        $clients = Clients::all()->pluck('full_name', 'client_id');

        return view('dashboard.vehicle_new', compact('clients'));
    }

    public function edit_vehicle($id)
    {
        $x['id'] = $id;

        $result = Vehicle::where('vehicle_id','=',$x)
        ->first();

        return view('dashboard.edit_vehicle', compact('result'));
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
    public function vehicle_update(Request $request)
    {
        $s=new Vehicle;
        $data = array('plate_no' =>$request->input('plateno'),
                      'type' =>$request->input('type'),
                      'model' =>$request->input('model'),
                      'color' =>$request->input('color'),
                      'description' =>$request->input('desc'));
        $s->where('vehicle_id', $request->input('vehicleid'))->update($data);
        return Redirect('/vehicle');
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
