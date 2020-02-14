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

    public function delivery_profile($id){
        
        $x['id'] = $id;

        $result = Delivery::join('delivery_details', 'delivery_details.delivery_id', 'delivery.delivery_id')
        ->join('supplier','supplier.supplier_id','delivery_details.supplier_id')
        ->join('products','products.product_id','delivery_details.product_id')
        ->where('delivery.delivery_id', '=' , $x)
        ->select('delivery.*', 'delivery_details.*', 'supplier.*', 'products.product_name')
        ->paginate(10);

        return view('dashboard.delivery_profile', compact('result'));
    }

    public function new_delivery(){
        $result = Product::all();
        $supplier = Supplier::all();
        return view('dashboard.delivery_new', compact('result','supplier'));
    }

}
