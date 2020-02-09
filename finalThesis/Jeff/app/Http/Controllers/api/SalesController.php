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

        $result = Sales::orderBy('sales.sales_id','asc')
        ->select('sales.*')
        ->paginate(10);
        
        return view('dashboard.sales');
        
    }
}
