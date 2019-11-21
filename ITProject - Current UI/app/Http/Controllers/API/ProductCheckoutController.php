<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProdCheckout;


class ProductCheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        return ProdCheckout::orderBy('transaction2_id', 'asc')
                ->join('clients', 'clients.client_id', 'transaction2.client_id')
                ->join('mechanic', 'mechanic.mechanic_id', 'transaction2.mechanic_id')
                ->join('vehicles', 'vehicles.vehicle_id', 'transaction2.vehicle_id')
                ->join('products', 'products.product_id', 'transaction2.product_id')
                ->join('services', 'services.service_id', 'transaction2.service_id')
                ->select('transaction2.*','clients.*','mechanic.*','vehicles.*','products.*','services.*')
                ->paginate(10);  

/*        return ('')
                ->join('clients')
                ->select('')
*/
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
            'transaction2_id' => 'required',
            'client_id' => 'required',
            'mechanic_id' => 'required',
            'vehicle_id' => 'required',
            'product_id' => 'required'
        ]);

        $product = ProdCheckout::create([
            'transaction2_id'=> $request['jo_id'],
            'client_id' => $request['client_id'],
            'mechanic_id' => $request['mechanic_id'],
            'vehicle_id' => $request['vehicle_id'],
            'product_id' => $request['product_id']
        ]); 

        return $prodcheckout;
        
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
            $prod_checkout = ProdCheckout::join('transaction2','transaction2.client_id','clients.client_id')
                ->select('transaction2.*', 'clients.*')
                ->where(function($query) use ($search){
            $query->where('firstname','LIKE',"%$search%")->orWhere('name','LIKE',"%$search%");
            })->paginate(5);
        }else if($search == null){
            $prod_checkout = ProdCheckout::join('transaction2','transaction2.client_id','clients.client_id')
                ->select('prod_checkout.*', 'clients.*')
                ->paginate(5);
        }
        return $prod_checkout;
    }
}
