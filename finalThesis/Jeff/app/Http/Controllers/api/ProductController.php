<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Transactions;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Product::orderBy('products.product_id', 'asc')
        ->join('product_details','product_details.product_id','products.product_id')
        ->join('provider','provider.provider_id','product_details.provider_id')
        ->where("products.quantity", "<", "10")
        ->select('product_details.*','products.*','provider.*')
        ->paginate(10);
        
        $inv = Transactions::orderBy('transactions.updated_at', 'desc')
        ->join('clients','clients.client_id','transactions.client_id')
        ->where('status', '=', 'Rendered')
        ->select('transactions.*', 'clients.*')
        ->paginate(10);

        return view('dashboard.dashboard', compact('result', 'inv'));
    }

    public function products(){
        $result = Product::orderBy('products.product_id', 'asc')
        ->join('product_details','product_details.product_id','products.product_id')
        ->join('provider','provider.provider_id','product_details.provider_id')
        ->select('product_details.*','products.*','provider.*')
        ->paginate(10);

        return view('dashboard.product', compact('result'));
    }

    public function product_profile($id){
        $x['id'] = $id;

        $result = Product::orderBy('products.product_id', 'desc')
        ->join('product_details','product_details.product_id','products.product_id')
        ->join('provider','provider.provider_id','product_details.provider_id')
        ->join('transactions','products.product_id','transactions.product_id')
        ->where('products.product_id', '=', $x)
        ->select('product_details.*','products.*','provider.*','transactions.quantity as tQty', 'transactions.status')
        ->paginate(10);

        $name = Product::orderBy('products.product_id', 'desc')
        ->where('products.product_id', '=', $x)
        ->select('products.*')
        ->paginate(10);

        return view('dashboard.product_profile', compact('result', 'name'));
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