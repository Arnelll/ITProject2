<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Client::latest()->paginate(10);
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
            'first_name' => ['required', 'string', 'max:155'],
            'last_name' => ['required', 'string', 'max:155'],
            'middle_name' => ['nullable', 'string', 'max:155'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:clients'],
            'contact_number' => ['required', 'numeric'],
        ]);

        return Client::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'middle_name' => $request['middle_name'],
            'address' => $request['address'],
            'email' => $request['email'],
            'contact_number' => $request['contact_number'],
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

        $client = Client::findOrFail($id);

        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:155'],
            'last_name' => ['required', 'string', 'max:155'],
            'middle_name' => ['nullable', 'string', 'max:155'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact_number' => ['required', 'numeric'],
        ]);

        $client->update($request->all());

        return ['message' => 'Client info has been updated'];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $client = Client::findOrFail($id);

        $client -> delete();

        return ['message' => 'Client record deleted'];

    }
}
