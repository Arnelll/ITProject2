<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\JobOrder;
use App\Clients;
use App\Mechanic;
use App\Vehicle;
use App\Product;
use App\Transactions2;
use App\WalkIn;
use App\Sales;
use App\SaleDetails;
use App\JobOrderDetails;

class ServiceController extends Controller
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

    public function new_sales()
    {
        //$clients = Clients::paginate(15);
        $clients = Clients::all()->pluck('full_name', 'client_id');
        $products = Product::pluck('product_name','product_id');
        $mechanic = Mechanic::all()->pluck('fullname', 'mechanic_id');
        $vehicle = Vehicle::pluck('plate_no','vehicle_id');

        return view('dashboard.sales_new', compact('clients','products','mechanic','vehicle'));

    }

    public function new_service()
    {
        $clients = Clients::all()->pluck('full_name', 'client_id');
        $products = Product::pluck('product_name','product_id');
        $mechanic = Mechanic::all()->pluck('fullname', 'mechanic_id');
        $vehicle = Vehicle::pluck('plate_no','vehicle_id');

        return view('dashboard.service_new', compact('clients','products','mechanic','vehicle'));
    }

    public function opt_trans()
    {

        return view('dashboard.transaction_option');
    }

    public function insert(Request $request){
        
    }

    public function insert_service(Request $request){
        $jo = new JobOrder;
        $id = $request -> client_id;
        $mid = $request -> mech;
        $vid = $request -> vcle;
        $jo -> client_id = $id;
        $jo -> mechanic_id = $mid;
        $jo -> vehicle_id = $vid;
        $jo -> remarks = $request -> svc;
        $jo -> total = $request -> totals;
        $jo -> date_created = date('Y-m-d H:i:s');
        if($jo->save()){
            $jId = $jo -> jo_id;
                foreach ($request -> productname as $key => $v)
                {
                    if($request->dis[$key]==null){
                        $discount = 0;
                    }else{
                        $discount = $request->dis[$key];
                    }
                        $data = array('jo_id'=>$jId,
                                'product_id'=>$v,
                                'quantity'=>$request->qty [$key],
                                'discount'=>$discount);
                        JobOrderDetails::insert($data);       
                }
            }
        return back();
    }

    public function insert_sales(Request $request){
        $sales = new Sales;
        $client = $request -> client_id;
        if($client == null){
            $client = 'Anonymous';
        }
        $sales -> client = $client;
        $sales -> total = $request -> totals;
        $sales -> date_created = date('Y-m-d H:i:s');
        if($sales->save()){
            $sId = $sales -> sales_id;
                foreach ($request -> productname as $key => $v)
                {
                    if($request->dis[$key]==null){
                        $discount = 0;
                    }else{
                        $discount = $request->dis[$key];
                    }
                        $data = array('sales_id'=>$sId,
                                'product_id'=>$v,
                                'quantity'=>$request->qty [$key],
                                'discount'=>$discount);
                        SaleDetails::insert($data);       
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
