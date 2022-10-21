<?php

namespace App\Http\Controllers;

use App\Models\categorya;
use Illuminate\Http\Request;

class categoryAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Allcategoryarticle()
    {
      $categories = categorya::all();
      return view('categories.categories')->with('categorya', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Createcategorya ()
    {
        return view('categories/categorya_creation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Addcategorya(Request $request)
    {
      $categorya =new categorya([
        'name' => $request->name,

        ]);
       $categorya->save();
       return redirect("/categorya/all");
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorya = categorya::where('id', $id)->first();
        return view('categories/categorya_edit')->with('categorya', $categorya);
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
      $categorya = categorya::where('id', $id)->first();
      $categorya->delete();
      return redirect()->back();
    }
}
