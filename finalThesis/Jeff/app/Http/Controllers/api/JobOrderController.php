<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Clients;
use App\Product;
use App\Transactions2;


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

    public function insert(Request $request)
    {
        //firstname, lastname, contact_no, age, email, created_at, updated_at
        $customers = new Clients;
        $customers -> firstname = $request -> fn;
        $customers -> lastname = $request -> ln;
        $customers -> age = $request -> age;
        $customers -> email = $request -> email;
        $customers -> contact_no = $request -> phone;
        if ($customers -> save()) {
            $id = $customers -> client_id;
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
        }
        return back();
    }

    public function findPrice(Request $request)
    {
        $data = Product::select('price')->where('product_id', $request->id)->first();
        return response()->json($data);
    }

    
}
