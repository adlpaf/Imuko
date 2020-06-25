<?php

namespace App\Http\Controllers;

use App\Client;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::select('clients.*', 'cities.name as city_name')
            ->join('cities', 'clients.city_id', 'cities.id')
            ->get();
        $cities = City::all();
        return view('client.index', compact('clients', 'cities'));
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
        $validator = Validator::make($request->all(), [
            'cod'       => 'required|string',
            'name'      => 'required|string',
            'city_id'   => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect('client')
                ->withErrors($validator)
                ->withInput();
        }

        $client = new Client();
        $client->cod     = $request->cod;
        $client->name    = $request->name;
        $client->city_id = $request->city_id;
        $client->save();

        return redirect('client')->with('message', 'Cliente agregado con éxitos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->city_id = $request->city_id;
        $client->save();
        return redirect('client')->with('message', 'Cliente actualizado con éxitos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Client $client)
    {
        $client->delete();
        return redirect('client')->with('message', 'Cliente eliminado con éxitos');
    }
}
