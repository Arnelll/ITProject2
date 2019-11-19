<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Supplier::latest()->paginate(10);
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
            'name' => ['required', 'string', 'max:155'],
            'address' => ['required', 'string', 'max:255'],
            'contact_first_name' => ['required', 'string', 'max:155'],
            'contact_last_name' => ['required', 'string', 'max:155'],
            'contact_number' => ['required', 'numeric'],
            'email' => ['required', 'string', 'max:255', 'unique:suppliers'],
        ]);

        return Supplier::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'contact_first_name' => $request['contact_first_name'],
            'contact_last_name' => $request['contact_last_name'],
            'contact_number' => $request['contact_number'],
            'email' => $request['email'],
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

        $supplier = Supplier::findOrFail($id);

        $supplier -> delete();

        return ['message' => 'Supplier record deleted'];

    }
}
