<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationEvenement;
use App\Models\Evenement;


class ReservationEvenementController extends Controller
{
    public function AllReservationEvenement()
   {

      $ReservationEvenement = ReservationEvenement::latest()->paginate(5);
      return view('ReservationEvenement.AllReservationEvenement', compact('ReservationEvenement'));
   }

   public function createReservationEvent()
   {

      $events = Evenement::all();

      return view('ReservationEvenement.AddReservationEvenement', compact('events'));
   }

 

   public function AddReservationEvenement(Request $request)
   {

      $Evenement = Evenement::findOrFail($request->evenement_id);
      $Evenement->evenements()->create([
         'evenement_id' => $request->evenement_id,
         'nb_place' => $request->nb_place,
         'user' => $request->user,

      ]);

      return redirect('reservationevenement/all')->with('message', 'reservation ajouté');
   }

   public function createReservationEventEdit()
   {

      $events = Evenement::all();

      return view('ReservationEvenement.EditReservationEvenement', compact('events'));
   }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReservationEvenement  
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $ReservationEvenement=ReservationEvenement::findOrFail($id);
       $events = Evenement::all();

        return view('ReservationEvenement.EditReservationEvenement', compact('events'))->with('ReservationEvenement',$ReservationEvenement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReservationEvenement  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     $ReservationEvenements=ReservationEvenement::findOrFail($id);


        $ReservationEvenements->update([
         'evenement_id' => $request->evenement_id,
         'nb_place' => $request->nb_place,
         'user' => $request->user,

        ]);

   

        return redirect("/reservationevenement/all");

    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReservationEvenement  
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $ReservationEvenements=ReservationEvenement::findOrFail($id);

    
         $ReservationEvenements->delete();
         return back();


    }




}
