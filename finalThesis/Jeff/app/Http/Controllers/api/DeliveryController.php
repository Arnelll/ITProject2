<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Delivery;
use App\DeliveryDetail;
use App\Product;
use App\Supplier;

class DeliveryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $result = Delivery::orderBy('delivery_id','desc')
        ->paginate(10);
        return view('dashboard.view_delivery', compact('result'));
    }

    public function delivery_profile($id,$delivery_id){
        $x['id'] = $id;
        $z['delivery_id'] = $delivery_id;

        $result = Delivery::where('delivery_id','=',$x)
        ->first();

        $clients = DeliveryDetail::join('supplier', 'supplier.supplier_id', 'delivery_details.supplier_id')
        ->where('delivery_details.supplier_id', '=', $x)
        ->first();

        $products = Delivery::join('delivery_details','delivery.delivery_id','delivery_details.delivery_id')
        ->join('products','delivery_details.product_id','products.product_id')
        ->where('delivery.delivery_id','=',$z)
        ->select('products.product_name','products.quantity')
        ->get();
        
        return view('dashboard.delivery_profile', compact('result', 'supplier', 'products'));
        
    }

    public function new_delivery(){
        $result = Product::all();
        $supplier = Supplier::all();
        return view('dashboard.delivery_new', compact('result','supplier'));
    }

}
