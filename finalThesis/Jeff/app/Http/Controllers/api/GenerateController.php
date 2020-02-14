<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Product;
use App\ProductDetails;
use App\Transactions;
use App\Supplier;
use App\Delivery;
use App\DeliveryDetail;

class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function generate(Request $request,$id){
        $x['id'] = $id;

        $sales = Product::orderBy('products.product_id', 'desc')
        ->join('sales_details', 'sales_details.product_id', 'products.product_id')
        ->join('sales', 'sales.sales_id', 'sales_details.sales_id')
        ->join('clients', 'clients.client_id', 'sales.client')
        ->where('sales_details.product_id', '=', $x)
        ->select('products.product_name', 'sales_details.*', 'sales.*', 'clients.*')
        ->get();

        $service = Product::orderBy('products.product_id', 'desc')
        ->join('job_order_details','job_order_details.product_id','products.product_id')
        ->join('job_order', 'job_order.jo_id', 'job_order_details.jo_id')
        ->where('job_order_details.product_id','=',$x)
        ->select('job_order.*', 'job_order_details.*', 'products.product_name')
        ->get();

        $name = Product::orderBy('products.product_id', 'desc')
        ->where('products.product_id', '=', $x)
        ->select('products.*')
        ->paginate(10);

        $pdf = PDF::loadView('dashboard.product_profile',['service' => $service, 'name' => $name, 'sales' => $sales]);
        return $pdf->stream('result.pdf', array('Attachment'=>0)); 
        

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
