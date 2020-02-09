<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clients;
use App\Product;
use App\Mechanic;
use App\JobOrder;
use App\Checkout;
use App\CheckoutDetails;
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
//select c.product_name from job_order a join job_order_details b on a.jo_id = b.jo_id join products c on b.product_id = c.product_id where a.jo_id = 117
    public function fetch(Request $request){
        $value = $request->value;
        $data = JobOrder::join('job_order_details', 'job_order_details.jo_id', 'job_order.jo_id')
        ->join('products','job_order_details.product_id','products.product_id')
        ->where('job_order.jo_id','=',$value)
        ->select('products.product_name','job_order_details.quantity')
        ->get();
        return $data;
    }

    public function insert(Request $request)
    {
        //firstname, lastname, contact_no, age, email, created_at, updated_at
        $id = $request -> joborder;
        $total = $request -> totals;
        $checkout = new Checkout;
        $checkout -> jo_id = $id;
        $checkout -> total = $total;
        $checkout -> date_created = date('Y-m-d H:i:s');
        if($checkout->save()){
            $cId = $checkout-> product_checkout_id;
            foreach ($request -> productname as $key => $v)
            {
                $data = array('productcheckout_id'=>$cId,
                              'product_id'=>$v,
                              'quantity'=>$request->qty [$key]);
                CheckoutDetails::insert($data);
            }
        }
        return back();
    }

    public function view_checkout($id){

        $result = Checkout::join('productcheckout_details','productcheckout_details.productcheckout_id','product_checkout.product_checkout_id')
        ->join('products','productcheckout_details.product_id','products.product_id')
        ->where('product_checkout.jo_id','=',$id)
        ->select('productcheckout_details.quantity','products.product_name')
        ->get();
        return view('dashboard.view_checkout', compact('result'));
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
