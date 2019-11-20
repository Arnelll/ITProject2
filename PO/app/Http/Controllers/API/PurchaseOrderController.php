<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PurchaseOrder;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PurchaseOrder::orderBy('po_id', 'desc')
        ->join('supplier','supplier.supplier_id','purchase_order.supplier_id')
        ->select('purchase_order.*','supplier.*')
        ->paginate(10);
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
        $test = 'hehe';
        $status = '1';

        /*
        return PurchaseOrder::create([
                'recipient' => $request->ordersT[0]['recipient'],
                'supplier_id' => $request->ordersT[0]['supplier_id'],
                'order_type' => $test,
                'status' => $status,
                'to_address' => $request->ordersT[0]['to_address'],
                'product_id' => $request->ordersT[0]['product_id'],
                'total' => $request->ordersT[0]['product_total'],
            ]);*/
        $length = $request->ordersT;
        $count = sizeOf($length);
        $array = array();
        for($i=0;$i<$count;$i++){
            $array[] = array(
                'recipient' => $request->ordersT[$i]['recipient'],
                'supplier_id' => $request->ordersT[$i]['supplier_id'],
                'order_type' => $test,
                'status' => $status,
                'to_address' => $request->ordersT[$i]['to_address'],
                'product_id' => $request->ordersT[$i]['product_id'],
                'total' => $request->ordersT[$i]['product_total'],
            );
            PurchaseOrder::create($array[$i]);
        }   

        
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
