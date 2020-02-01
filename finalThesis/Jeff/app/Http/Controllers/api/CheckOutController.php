<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clients;
use App\Product;
use App\Mechanic;
use App\JobOrder;
use App\Checkout;
class CheckOutController extends Controller
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
        $products = Product::pluck('product_name','product_id');
        $mechanics = Mechanic::all()->pluck('fullname','mechanic_id');
        $joborder = JobOrder::all();

        return view('dashboard.product_co', compact('clients','products','mechanics','joborder'));
    }

    public function fetch(Request $request){
        $value = $request->value;
        $data = JobOrder::orderBy('job_order.jo_id', 'desc')
        ->join('clients', 'clients.client_id', 'job_order.client_id')
        ->join('products', 'products.product_id', 'job_order.product_id')
        ->where('job_order.jo_id',$value)
        ->select('job_order.quantity','job_order.jo_id','clients.firstname','clients.lastname','products.product_name')
        ->get();
        return $data;
    }

    public function insert(Request $request)
    {
        //firstname, lastname, contact_no, age, email, created_at, updated_at
        $id = $request -> joborder;
            foreach ($request -> productname as $key => $v)
            {
                $data = array('jo_id'=>$id,
                              'jo_pn'=>$request->jo_pn,
                              'jo_qty'=>$request->jo_qty,
                              'product_id'=>$v,
                              'quantity'=>$request->qty [$key],
                              'discount'=>$request->dis [$key],
                              'total'=>$request->amount [$key],
                              'date_created'=>date('Y-m-d H:i:s'));
                Checkout::insert($data);
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
