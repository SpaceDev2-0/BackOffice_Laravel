<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Accessoire;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //view all locations
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFront()
    {
        return view('locations.indexFront');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get all velos
        
        //get all clients

        //get all accessoires
        $accessoires = Accessoire::all();

        //create a new location
        return view('locations.create', compact('accessoires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store a new location
        $request->validate([
            'idVelo' => 'required',
            'idClient' => 'required',
            'idStation' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'prix' => 'required',
            'statutPaiement' => 'required'
        ]);

        $location = new Location([
            'idVelo' => $request->get('idVelo'),
            'idClient' => $request->get('idClient'),
            'idStation' => $request->get('idStation'),
            'dateDebut' => $request->get('dateDebut'),
            'dateFin' => $request->get('dateFin'),
            'prix' => $request->get('prix'),
            'statutPaiement' => $request->get('statutPaiement'),
            
        ]);
        $location->statutLocation = '1';
        $location->remarque = 'pas de remnarque';
        $location->idAgent = '1';
        // associer les accessoires à la location
        $accessoire = Accessoire::find($request->get('accessoire'));
        if ($accessoire) {
            $location->accessoires()->save($accessoire);
        }else{
            $message = "Aucun accessoire n'a été sélectionné";
        }
        


        $location->save();
        return redirect('/locations')->with('success', 'Location saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //show a location
        return view('locations.show', compact('location'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //edit a location
        return view('locations.edit', compact('location'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //update a location
        $request->validate([
            'idVelo' => 'required',
            'idClient' => 'required',
            'idStation' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'prix' => 'required',
            'statutPaiement' => 'required'
        ]);

        $location->idVelo = $request->get('idVelo');
        $location->idClient = $request->get('idClient');
        $location->idStation = $request->get('idStation');
        $location->dateDebut = $request->get('dateDebut');
        $location->dateFin = $request->get('dateFin');
        $location->prix = $request->get('prix');
        $location->statutPaiement = $request->get('statutPaiement');
        $location->statutLocation = $request->get('statutLocation');
        $location->remarque = $request->get('remarque');
        
        $location->save();

        return redirect('/locations')->with('success', 'Location updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        // delete a location
        $location->delete();

        return redirect('/locations')->with('success', 'Location deleted!');

    }
}
