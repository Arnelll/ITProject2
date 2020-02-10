<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Delivery;
use App\Products;

class DeliveryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard.view_delivery');
    }

    public function new_delivery(){
        return view('dashboard.delivery_new');
    }

}
