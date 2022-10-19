<?php

namespace App\Http\Controllers;

use App\Models\Accessoire;
use Illuminate\Http\Request;

class AccessoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all accessoires
        $accessoires = Accessoire::all();
        return view('accessoires.index', compact('accessoires'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show the form to create a new accessoire
        return view('accessoires.create');

    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store the new accessoire
        $accessoire = new Accessoire();
        $accessoire->nomAccessoire = $request->nomAccessoire;
        $accessoire->prix = $request->prix;
        $accessoire->save();

        return redirect()->route('accessoires.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function show(Accessoire $accessoire)
    {
        // show the accessoire
        return view('accessoires.show', compact('accessoire')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessoire $accessoire)
    {
        // show the form to edit the accessoire
        return view('accessoires.edit', compact('accessoire'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessoire $accessoire)
    {
        // update the accessoire
        $accessoire->nomAccessoire = $request->nomAccessoire;
        $accessoire->prix = $request->prix;

        $accessoire->save();

        return redirect()->route('accessoires.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessoire $accessoire)
    {
        // delete the accessoire
        $accessoire->delete();

        return redirect()->route('accessoires.index');

    }
}
