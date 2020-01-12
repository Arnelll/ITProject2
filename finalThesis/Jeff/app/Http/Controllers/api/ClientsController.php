<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clients;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Clients::orderBy('clients.client_id', 'asc')
        ->paginate(10);

        return view('dashboard.accounts', compact('result'));
    }

    public function acounts()
    {
        $result = Clients::orderBy('clients.client_id', 'asc')
        ->join('transaction2', 'transaction2.client_id', 'clients.client_id')
        ->select('clients.*', 'transaction2.*')
        ->paginate(10);

        return view('dashboard.accounts', compact('result'));
    }


    public function view_accounts($id){
        $x['id'] = $id;

        $result = Clients::where('client_id','=',$x)
        ->first();

        $transaction = Clients::orderBy('clients.client_id', 'asc')
        ->join('transaction2', 'transaction2.client_id', 'clients.client_id')
        ->join('products', 'products.product_id', 'transaction2.product_id')
        ->where('clients.client_id', '=', $x)
        ->select('transaction2.*', 'products.*')
        ->paginate(10);

        $service = Clients::orderBy('clients.client_id', 'asc')
        ->join('transactions', 'transactions.client_id', 'clients.client_id')
        ->join('products', 'products.product_id', 'transactions.product_id')
        ->where('clients.client_id', '=', $x)
        ->select('transactions.*', 'products.*')
        ->paginate(10);
        
        return view('dashboard.view_accounts', compact('result','transaction','service'));
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
