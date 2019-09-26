<?php

namespace Jeff\Http\Controllers\api;

use Illuminate\Http\Request;
use Jeff\Http\Controllers\Controller;
use Jeff\Clients;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Clients::orderBy('client_id', 'asc')
            ->join('transactions','transactions.client_id','clients.client_id')
            ->join('products','products.product_id','transactions.product_id')
            ->select('clients.client_id','clients.contact_no','clients.created_at','clients.lastname','clients.firstname','clients.age','clients.email','transactions.quantity','transactions.status','transactions.tId','products.product_name','products.price')
            ->paginate(10);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    public function create()
    {
        
    }

    */
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
            'firstname' => 'required|string|max:191',
            'lastname' => 'required|string|max:191',
            'contact_no' => 'required',
            'email' => 'string|max:191',
            'age' => 'integer'
        ]);

        return Clients::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'contact_no' => $request['contact_no'],
            'email' => $request['email'],
            'age' => $request['age']
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
        $customers = Clients::findOrFail($id);

        $this->validate($request,[
            'firstname' => 'required|string|max:191',
            'lastname' => 'required|string|max:191',
            'contact_no' => 'required'
        ]);
        
        $customers->update($request->all());
        return ['message' => 'hehe'];
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
        $customers = Clients::findOrFail($id);

        $customers->delete();

        return ['message' => 'Customer successfully deleted.'];
    }
}
