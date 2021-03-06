<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Clients;
use App\Product;
use App\Transactions2;
use App\JobOrder;


class JobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        return view('dashboard.debugger');
    }

    public function index()
    {
        //$clients = Clients::paginate(15);
        $products = Product::pluck('product_name','product_id');

        return view('dashboard.debugger', compact('products'));
    }

    public function new_walkin()
    {
        //$clients = Clients::paginate(15);
        $clients = Clients::all()->pluck('full_name', 'client_id');
        $products = Product::pluck('product_name','product_id');

        return view('dashboard.walkin_new', compact('clients','products'));
    }

    public function insert(Request $request)
    {
        //firstname, lastname, contact_no, age, email, created_at, updated_at
        $id = $request -> client_id;
            foreach ($request -> productname as $key => $v)
            {
                $data = array('client_id'=>$id,
                              'product_id'=>$v,
                              'quantity'=>$request->qty [$key],
                              'discount'=>$request->dis [$key],
                              'total'=>$request->amount [$key],
                              'date_created'=>date('Y-m-d H:i:s'));
                Transactions2::insert($data);
            }
        return back();
    }

    public function findPrice(Request $request)
    {
        $data = Product::select('retail_price')->where('product_id', $request->id)->first();
        return $data;
    }

    public function updatejo_status(Request $request){
        $jId = $request -> job_id;
        $status = $request -> status;
        $update = JobOrder::where('jo_id',$jId)
        ->first();
        $update -> status = $status;
        $update -> save();
        return back();
    }

    
}
