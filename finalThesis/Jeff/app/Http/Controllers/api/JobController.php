<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clients;
use App\Product;
use App\JobOrder;
use App\Mechanic;
use App\JobOrderDetails;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Clients::all()->pluck('full_name', 'client_id');
        $mechanic = Mechanic::all()->pluck('fullname', 'mechanic_id');
        $products = Product::all()->pluck('product_name', 'product_id');
        return view('dashboard.new_joborder', compact('clients','products','mechanic'));
    }

    public function insert_jooo(Request $request){
        $products = count($request -> productname);
        $jo = new JobOrder;
        $jo -> client_id = $request -> client_id;
        $jo -> mechanic_id = $request -> mech;
        $jo -> vehicle_id = '1';
        $jo -> remarks = $request -> svc;
        $jo -> total = $request -> totals;
        $jo -> date_created = date('Y-m-d H:i:s');
        if($jo -> save()){
            $jId = $jo -> jo_id;
            for ($i = 0; $i<$products;$i++){
                if($request->dis[$i]==null){
                    $dis = 0;
                }else{
                    $dis = $request->dis[$i];
                }
                $data = [
                    'jo_id' => $jId,
                    'product_id' => $request->productname[$i],
                    'quantity' => $request->qty[$i],
                    'discount' => $dis
                ];
                JobOrderDetails::insert($data);
            }
            
        }
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
