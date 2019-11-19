<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WalkinTransaction;

class WalkinTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return WalkinTransaction::latest()->paginate(10);
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
        $this->validate($request, [
            'receipt_number' => ['required', 'string', 'max:65', 'unique:walk_in_transactions'],
            'client_id' => ['required', 'numeric', 'max:15'],
            'handler_id' => ['required', 'numeric', 'max:15'],
            'product_code' => ['required', 'string', 'max:63'],
        ]);

        return WalkinTransaction::create([
            'receipt_number' => $request['receipt_number'],
            'client_id' => $request['client_id'],
            'handler_id' => $request['handler_id'],
            'product_code' => $request['product_code'],
        ]);
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

        $walkintransaction = WalkinTransaction::findOrFail($id);

        $walkintransaction -> delete();

        return ['message' => 'Transaction record deleted'];

    }
}
