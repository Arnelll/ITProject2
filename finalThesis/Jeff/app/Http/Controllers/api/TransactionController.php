<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transactions;
use App\Transactions2;
use App\JobOrder;
use App\Product;
use App\Clients;

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
       
        /*->join('mechanic', 'mechanic.mechanic_id', 'job_order.mechanic_id')
        ->join('vehicles', 'vehicles.vehicle_id', 'job_order.vehicle_id')
        ->join('job_order_details', 'job_order_details.jo_id', 'job_order.jo_id')
        ->join('products', 'products.product_id', 'job_order_details.product_id')
        ->where('job_order.status','=','Rendered')
        ->select('clients.*','mechanic.*','vehicles.*','products.*', 'job_order.*')*/
        ->paginate(10);

        //return view('dashboard.transactions_services', compact('result'));
        return view('dashboard.transactions_services', compact('result'));
    }

    public function walk_ins(){
        
        $result = Transactions2::orderBy('transaction2.transaction2_id', 'asc')
        ->join('clients', 'clients.client_id', 'transaction2.client_id')
        ->select('clients.*', 'transaction2.*')
        ->paginate(10);

        return view('dashboard.transactions_walk-in', compact('result'));
    }

    public function view_service($id,$jo_id){
        $x['id'] = $id;
        $z['jo_id'] = $jo_id;

        $result = JobOrder::where('jo_id','=',$x)
        ->first();

        $clients = JobOrder::join('clients', 'clients.client_id', 'job_order.client_id')
        ->where('job_order.client_id', '=', $x)
        ->first();

        $vehicle = JobOrder::join('vehicles','vehicles.vehicle_id','job_order.vehicle_id')
        ->where('job_order.jo_id', '=', $z)
        ->first();

        $mechanic = JobOrder::join('mechanic','mechanic.mechanic_id','job_order.mechanic_id')
        ->where('job_order.jo_id', '=', $z)
        ->first();

        $jo = JobOrder::select('remarks','status')
        ->where('jo_id','=',$z)
        ->first();
        /*$products= JobOrder::orderBy('job_order.jo_id', 'asc')
        ->join('products', 'products.product_id', 'job_order.product_id')
        ->where('job_order.product_id', '=', $x)
        ->select('products.*')
        ->paginate(10);*/
        // d.quantity, d.retail_price, d.retail_price*d.quantity
        $products = JobOrder::join('job_order_details','job_order.jo_id','job_order_details.jo_id')
        ->join('products','job_order_details.product_id','products.product_id')
        ->where('job_order.jo_id','=',$z)
        ->select('products.product_name','products.quantity','products.retail_price')
        ->get();
        
        return view('dashboard.view_service', compact('result','clients','vehicle','mechanic','jo','products'));
        
    }

    public function transaction_update(Request $request)
    {
        $s=new JobOrder;
        $data = array('product_id' =>$request->input('productid'),
                      'quantity' =>$request->input('qty'),
                      'price' =>$request->input('price'),
                      'discount'=>$request->input('dis'),
                      'total'=>$request->input('total'),
                      'status'=>$request->input('stat'));
        $s->where('jo_id', $request->input('joid'))->update($data);
        return back();
    }

    public function findPrice(Request $request)
    {
        $data = Product::select('price')->where('product_id', $request->id)->first();
        return response()->json($data);
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
