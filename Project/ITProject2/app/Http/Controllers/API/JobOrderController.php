<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jo;


class JobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        return Jo::orderBy('jo_id', 'asc')
                  ->join('clients', 'clients.client_id', 'job_order.client_id')
                  ->join('mechanic', 'mechanic.mechanic_id', 'job_order.mechanic_id')
                  ->join('vehicle', 'vehicle.vehicle_id', 'job_order.vehicle_id')
                  ->join('products', 'products.product_id', 'job_order.product_id')
                  ->select('job_order.*','clients.*','mechanic.*','vehicle.*','products.*')
                  ->paginate(10);  

        
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
        $this->validate($request,[
            'client_id' => 'required',
            'mechanic_id' => 'required',
            'vehicle_id' => 'required',
            'services' => 'required',
            'product_id' => 'required'
        ]);

        $product = Jo::create([
            'client_id' => $request['client_id'],
            'mechanic_id' => $request['mechanic_id'],
            'vehicle_id' => $request['vehicle_id'],
            'services' => $request['services'],
            'product_id' => $request['product_id']
        ]); 

        return $jo;
        
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

    public function search(){

        if($search = \Request::get('q')){
            $job_order = Jo::join('job_order','job_order.client_id','clients.client_id')
                ->select('job_order.*', 'clients.*')
                ->where(function($query) use ($search){
            $query->where('firstname','LIKE',"%$search%")->orWhere('name','LIKE',"%$search%");
            })->paginate(5);
        }else if($search == null){
            $job_order = Jo::join('job_order','job_order.client_id','clients.client_id')
                ->select('job_order.*', 'clients.*')
                ->paginate(5);
        }
        return $job_order;
    }
}
