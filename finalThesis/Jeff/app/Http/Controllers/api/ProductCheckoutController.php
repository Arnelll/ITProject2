<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Checkout;

class ProductCheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $result = Checkout::orderBy('product_checkout.product_checkout_id', 'desc')
         ->join('job_order', 'job_order.jo_id', 'product_checkout.jo_id')
         ->join('clients', 'clients.client_id', 'job_order.client_id')
         ->paginate(10);
 
         return view('dashboard.product_checkout', compact('result'));
     }
 

     public function view_details($id,$product_checkout_id){
        $x['id'] = $id;
        $z['product_checkout_id'] = $product_checkout_id;

        $result = Checkout::where('product_checkout_id','=',$x)
        ->first();

        $jo = Checkout::join('job_order', 'job_order.jo_id', 'product_checkout.jo_id')
        ->where('product_checkout.jo_id', '=', $x)
        ->first();

        $clients= Checkout::join('job_order', 'job_order.jo_id', 'product_checkout.jo_id')
        ->join('clients','clients.client_id','job_order.client_id')
        ->where('product_checkout.product_checkout_id', '=', $z)
        ->first();

        $vehicle = Checkout::join('job_order', 'job_order.jo_id', 'product_checkout.jo_id')
        ->join('vehicles','vehicles.vehicle_id','job_order.vehicle_id')
        ->where('product_checkout.product_checkout_id', '=', $z)
        ->first();

        $mechanic = Checkout::join('job_order', 'job_order.jo_id', 'product_checkout.jo_id')
        ->join('mechanic','mechanic.mechanic_id','job_order.mechanic_id')
        ->where('product_checkout.product_checkout_id', '=', $z)
        ->first();

        /*$products= JobOrder::orderBy('job_order.jo_id', 'asc')
        ->join('products', 'products.product_id', 'job_order.product_id')
        ->where('job_order.product_id', '=', $x)
        ->select('products.*')
        ->paginate(10);*/
        // d.quantity, d.retail_price, d.retail_price*d.quantity

        $products = Checkout::join('job_order', 'job_order.jo_id', 'product_checkout.jo_id')
        ->join('job_order_details','job_order.jo_id','job_order_details.jo_id')
        ->join('products','job_order_details.product_id','products.product_id')
        ->where('product_checkout.product_checkout_id', '=', $z)
        ->select('products.product_name','job_order_details.quantity','products.retail_price')
        ->get();

        $products2 = Checkout::join('productcheckout_details','product_checkout.product_checkout_id','productcheckout_details.productcheckout_id')
        ->join('products','productcheckout_details.product_id','products.product_id')
        ->where('product_checkout.product_checkout_id','=',$z)
        ->select('products.product_name','productcheckout_details.quantity','products.retail_price')
        ->get();
        
        return view('dashboard.view_prodco', compact('result','clients','vehicle','mechanic','jo','products','products2'));
        
    }
}
