<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transactions;
use App\Transactions2;
use App\JobOrder;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = JobOrder::orderBy('job_order.jo_id', 'desc')
        ->join('clients', 'clients.client_id', 'job_order.client_id')
        ->join('mechanic', 'mechanic.mechanic_id', 'job_order.mechanic_id')
        ->join('vehicles', 'vehicles.vehicle_id', 'job_order.vehicle_id')
        ->join('products', 'products.product_id', 'job_order.product_id')
        ->select('clients.*','mechanic.*','vehicles.*','products.*', 'job_order.*')
        ->paginate(10);

        return view('dashboard.transactions_services', compact('result'));
    }

    public function walk_ins(){
        
        $result = Transactions2::orderBy('transaction2.transaction2_id', 'asc')
        ->join('clients', 'clients.client_id', 'transaction2.client_id')
        ->select('clients.*', 'transaction2.*')
        ->paginate(10);

        return view('dashboard.transactions_walk-in', compact('result'));
    }

    public function view_walkin($id){
        $x['id'] = $id;

        $result = Transactions2::orderBy('transaction2.transaction2_id', 'asc')
        ->join('clients', 'clients.client_id', 'transaction2.client_id')
        ->join('products', 'products.product_id', 'transaction2.product_id')
        ->where('transaction2.transaction2_id', '=', $x)
        ->select('clients.*', 'transaction2.*', 'products.*')
        ->paginate(10);

        return view('dashboard.view_walkin', compact('result'));
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
