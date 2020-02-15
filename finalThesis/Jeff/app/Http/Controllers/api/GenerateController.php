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
use App\JobOrder;

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

    public function generate($id,$jo_id){
        $x['id'] = $id;
        $z['jo_id'] = $jo_id;

        $result = JobOrder::where('jo_id','=',$x)
        ->first();

        $date = JobOrder::where('jo_id','=',$z)
        ->first();
        $araw = date('F j Y', strtotime($date->date_created));

        $clients = JobOrder::join('clients', 'clients.client_id', 'job_order.client_id')
        ->where('job_order.client_id', '=', $x)
        ->first();

        $vehicle = JobOrder::join('vehicles','vehicles.vehicle_id','job_order.vehicle_id')
        ->where('job_order.jo_id', '=', $z)
        ->first();

        $mechanic = JobOrder::join('mechanic','mechanic.mechanic_id','job_order.mechanic_id')
        ->where('job_order.jo_id', '=', $z)
        ->first();

        $jo = JobOrder::select('remarks','status','jo_id')
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
        ->select('products.product_name','job_order_details.quantity','products.retail_price')
        ->get();
        /*$x['id'] = $id;

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

        $pdf = PDF::loadView('dashboard.product_profile',['service' => $service, 'name' => $name, 'sales' => $sales]);*/

        $data = ['title' => 'Laravel 5.8 HTML to PDF'];
        $pdf = PDF::loadView('report.jo',compact('result','clients','vehicle','mechanic','jo','products','araw'));
        return $pdf->download('jo.pdf');
        

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
