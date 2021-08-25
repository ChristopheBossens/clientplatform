<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::select('id', 'name', 'contact_person', 'phone_number')->get();
        return view('dashboard')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'contact_person' => 'required',
            'street' => 'required',
            'number' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'status' => 'required|integer',
        ]);

        $client = new Client($validated);
        $client->save();

        return redirect(route('client.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit')->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name' => 'required',
            'contact_person' => 'required',
            'street' => 'required',
            'number' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'status' => 'required|integer',
        ]);

        $client->update($validated);

        return redirect(route('client.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
