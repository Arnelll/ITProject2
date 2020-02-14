<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sales;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $result = Sales::orderBy('sales.sales_id','desc')
        ->join('sales_details','sales_details.sales_id','sales.sales_id')
        ->join('products','products.product_id','sales_details.product_id')
        ->leftjoin('clients','sales.client','clients.client_id')
        ->select('products.product_name','sales_details.quantity','clients.firstname','clients.lastname','sales.date_created','sales.total')
        ->paginate(10);
        
        return view('dashboard.sales', compact('result'));
        
    }
}
