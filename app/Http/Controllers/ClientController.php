<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientFormRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clients.index');
    }

    public function lister()
    {
        $clients = Client::SimplePaginate(5);
        return view('clients.lister', compact('clients'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client;
        return view('clients.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientFormRequest $request)
    {
        $client = Client::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'date_naissance' => $request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
            'adresse' => $request->adresse,
            'numero_carte' => $request->numero_carte,
            'jour_entree' => $request->jour_entree,
            'jour_sortie' => $request->jour_sortie,
        ]);

        return redirect()->route('clients.create', compact('client'))->with('message',"client $client->nom $client->prenom cree avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {

        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientFormRequest $request, Client $client)
    {
        $client->update([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'date_naissance' => $request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
            'adresse' => $request->adresse,
            'numero_carte' => $request->numero_carte,
            'jour_entree' => $request->jour_entree,
            'jour_sortie' => $request->jour_sortie,
    ]);
        // $client = Client::where('numero_carte',1)->update();

        return redirect()->route('clients.edit', compact('client'))->with('message',"client $client->nom $client->prenom modifier avec succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.lister', compact('client'));
    }
}
