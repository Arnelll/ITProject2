<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductDetails;
use App\Transactions;
use App\Supplier;
use App\Delivery;
use App\DeliveryDetail;

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
        ->where("products.quantity", "<", "10")
        ->select('product_details.*','products.*')
        ->paginate(10);
        
        $inv = Transactions::orderBy('transactions.updated_at', 'desc')
        ->join('clients','clients.client_id','transactions.client_id')
        ->where('status', '=', 'Rendered')
        ->select('transactions.*', 'clients.*')
        ->paginate(10);

        return view('dashboard.dashboard', compact('result', 'inv'));
    }

    public function products(){
        $result = Product::orderBy('product_id','asc')
        ->paginate(10);

        return view('dashboard.product', compact('result'));
    }

    public function product_profile($id){
        $x['id'] = $id;

        $sales = Product::orderBy('products.product_id', 'desc')
        ->join('sales_details', 'sales_details.product_id', 'products.product_id')
        ->join('sales', 'sales.sales_id', 'sales_details.sales_id')
        ->join('clients', 'clients.client_id', 'sales.client')
        ->where('sales_details.product_id', '=', $x)
        ->select('products.product_name', 'sales_details.*', 'sales.*', 'clients.*')
        ->get();

        $service = Product::orderBy('products.product_id', 'desc')
        ->join('job_order_details','job_order_details.product_id','products.product_id')
        ->join('job_order', 'job_order.jo_id', 'job_order_details.jo_id')
        ->where('job_order_details.product_id','=',$x)
        ->select('job_order.*', 'job_order_details.*', 'products.product_name')
        ->get();

        $name = Product::orderBy('products.product_id', 'desc')
        ->where('products.product_id', '=', $x)
        ->select('products.*')
        ->paginate(10);

        return view('dashboard.product_profile', compact('sales', 'service', 'name'));
    }

    public function new_product()
    {
        $result = Supplier::get();
        return view('dashboard.product_new', compact('result'));
    }

    public function edit_product($id)
    {
        $x['id'] = $id;

        $result = Product::where('product_id','=',$x)
        ->first();

        return view('dashboard.edit_product', compact('result'));
    }

    public function insert(Request $request)
    {
        //firstname, lastname, contact_no, age, email, created_at, updated_at
        $product = new Product;
        $product -> product_name = $request -> productname;
        $product -> quantity = $request -> qty;
        $product -> retail_price = $request -> retail_price;
        $product -> wholesale_price = $request -> whole_price;
        $product -> distributor_price = $request -> dis_price;
        if ($product -> save()){
            $id = $product -> product_id;
                $data = array('product_id'=>$id,
                              'category'=>$request->category,
                              'brand'=>$request->brand,
                              'supplier_id'=>$request->supplier_id);
                ProductDetails::insert($data);
        }
        return back();
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
     */

    /**
     * Update the specified resource in storage.
     *
     */
    public function product_update(Request $request)
    {
        $s=new Product;
        $data = array('product_name' =>$request->input('productname'),
                      'retail_price' =>$request->input('price'),
                      'wholesale_price' =>$request->input('whole_price'),
                      'distributor_price' =>$request->input('dis_price'));
        $s->where('product_id', $request->input('productid'))->update($data);
        return Redirect('/products');
    }

    public function product_add(Request $request){
        /*$del = new Delivery;
        $pId = $request -> product;
        $qty = $request -> quantity;
        $del -> product_id = $pId;
        $del -> quantity = $qty;
        $del -> supplier_id = $request -> supplier;
        $del -> delivery_date = date('Y-m-d H:i:s');
        if($del -> save()){
            $pId = $request -> product;
            $qty = $request -> quantity;
            $add = Product::where('product_id',$pId)->first();
            $add -> quantity += $qty;
            $add -> save();
        }*/
        $del = new Delivery;
        $pId = $request -> product;
        $qty = $request -> quantity;
        
        $del -> delivery_date = date('Y-m-d H:i:s');
        if($del -> save()){
            
            $dId = $del -> delivery_id;
            foreach ($request -> product as $key => $v){
                $data = array('delivery_id'=>$dId,
                        'product_id'=>$v,
                        'quantity'=>$request->quantity [$key],
                        'supplier_id'=>$request->supplier[$key]);
                DeliveryDetail::insert($data);
                $add = Product::where('product_id',$v)->first();
                $add -> quantity += $request->quantity [$key];
                $add -> save();
            }
        }
        return back();
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
