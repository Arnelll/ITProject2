<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clients;
use DB;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Clients::orderBy('clients.lastname', 'asc')
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

        $vehicle = Clients::orderBy('clients.client_id', 'asc')
        ->join('vehicles', 'vehicles.client_id', 'clients.client_id')
        ->where('clients.client_id', '=', $x)
        ->select('vehicles.*')
        ->paginate(10);

        $transaction = Clients::orderBy('clients.client_id', 'asc')
        ->join('transaction2', 'transaction2.client_id', 'clients.client_id')
        ->join('products', 'products.product_id', 'transaction2.product_id')
        ->where('clients.client_id', '=', $x)
        ->select('transaction2.*', 'products.*')
        ->paginate(10);

        $sales = Clients::orderBy('clients.client_id', 'desc')
        ->join('sales', 'sales.client', 'clients.client_id')
        ->join('sales_details', 'sales_details.sales_id', 'sales.sales_id')
        ->join('products', 'products.product_id', 'sales_details.product_id')
        ->where('sales.client', '=', $x)
        ->select('clients.*', 'sales.*', 'sales_details.*', 'products.product_name')
        ->get();

        $service = Clients::orderBy('clients.client_id', 'desc')
        ->join('job_order','job_order.client_id','clients.client_id')
        ->join('vehicles','vehicles.vehicle_id','job_order.vehicle_id')
        ->where('job_order.client_id','=',$x)
        ->select('job_order.remarks','job_order.date_created','vehicles.plate_no','vehicles.type','job_order.status', 'job_order.jo_id')
        ->get();
        
        return view('dashboard.view_accounts', compact('result','transaction','service','vehicle', 'sales'));
    }

    public function new_account()
    {
        return view('dashboard.account_new');

    }

    public function edit_account($id)
    {
        $x['id'] = $id;

        $result = Clients::where('client_id','=',$x)
        ->first();

        return view('dashboard.edit_account', compact('result'));
    }

    public function insert(Request $request)
    {
        //firstname, lastname, contact_no, address, email, created_at, updated_at
                $data = array('firstname'=>$request->fn,
                              'lastname'=>$request->ln,
                              'contact_no'=>$request->phone, 
                              'address'=>$request->address,
                              'email'=>$request->email,
                              'created_at'=>date('Y-m-d H:i:s'));
                Clients::insert($data);
        return back();
    }

    public function account_update(Request $request)
    {
        $s=new Clients;
        $data = array('firstname' =>$request->input('fn'),
                      'lastname' =>$request->input('ln'),
                      'address' =>$request->input('address'),
                      'email' =>$request->input('email'),
                      'contact_no' =>$request->input('contactnum'));
        $s->where('client_id', $request->input('clientid'))->update($data);
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
