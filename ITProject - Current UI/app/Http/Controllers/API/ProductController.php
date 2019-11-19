<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'product_code' => ['required', 'string', 'max:63'],
            'name' => ['required', 'string', 'max:155'],
            'brand' => ['nullable', 'string', 'max:155'],
            'category' => ['required', 'string', 'max:155'],
            'supplier' => ['required', 'string', 'max:155'],
            'price' => ['required'],
            'quantity_in_stock' => ['required', 'numeric'],
            'status' => ['required'],
        ]);

        return Product::create([
            'product_code' => $request['product_code'],
            'name' => $request['name'],
            'brand' => $request['brand'],
            'category' => $request['category'],
            'supplier' => $request['supplier'],
            'price' => $request['price'],
            'quantity_in_stock' => $request['quantity_in_stock'],
            'status' => $request['status'],
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
        
        $product = Product::findOrFail($id);

        $product -> delete();

        return ['message' => 'Product deleted'];

    }
}
