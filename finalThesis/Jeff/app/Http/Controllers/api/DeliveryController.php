<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Delivery;
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

    public function new_delivery(){
        $result = Product::all();
        $supplier = Supplier::all();
        return view('dashboard.delivery_new', compact('result','supplier'));
    }

}
