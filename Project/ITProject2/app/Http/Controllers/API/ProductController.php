<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductDetails;


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
        return Product::latest()
                  ->join('product_details','product_details.product_id','products.product_id')
                  ->join('provider','provider.provider_id','product_details.provider_id')
                  ->select('product_details.*','products.*','provider.*')
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
        //
        $this->validate($request,[
            'product_name' => 'required|string|max:191',
            'quantity' => 'required|integer',
            'category' => 'string|max:191',
            'brand' => 'string|max:191',
            'provider_id' => 'required'
        ]);

        $product = Product::create([
            'product_name' => $request['product_name'],
            'quantity' => $request['quantity']
        ]); 

        $productDetails = ProductDetails::create([
            'product_id' => $product->product_id,
            'category' => $request['category'],
            'brand' => $request['brand'],
            'provider_id' => $request['provider_id']
        ]);

        return $product;
        
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
        $products = Product::findOrFail($id);
        $productDetails = ProductDetails::findOrFail($id);
        $products->update($request->all());
        $productDetails->update($request->all());
        return ['message' => 'hehe'];
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
