<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Velo;
use Illuminate\Http\Request;

class VeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Velo::latest()->orderBy('id','desc')->paginate(1);
      
        

        return view('velo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('velo.create',compact('categories'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category= Category::findOrFail($request->category_id);

        $request->validate([
            'velo_name'          =>  'required|unique:velos|max:255',
            'velo_spefication'         =>  'required',
            'velo_prix_location'   =>  'required',
            'velo_image'         =>  'required'
        ]);

        $file_name = time() . '.' . request()->velo_image->getClientOriginalExtension();

        request()->velo_image->move(public_path('images'), $file_name);

        $category->velos()->create([
            'velo_name' => $request->velo_name,
             'velo_spefication' => $request->velo_spefication,
             'velo_availability' => $request->velo_availability,
            'velo_prix_location' => $request->velo_prix_location,
            'velo_image' => $file_name

        ]);

        

        

        return redirect()->route('velo.index')->with('success', 'velo Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function show(Velo $velo)
    {
        //
        return view('velo.show', compact('velo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function edit(Velo $velo)
    {
        //
        $categories = Category::all();
        return view('velo.edit', compact('velo','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        
        $request->validate([
            'velo_name'          =>  'required',
            'category_id' =>'required',
            'velo_spefication'         =>  'required',
            'velo_prix_location'   =>  'required',
            'velo_image'         =>  'required'
        ]);

        $velo_image = $request->hidden_velo_image;

        if($request->velo_image != '')
        {
            $velo_image = time() . '.' . request()->velo_image->getClientOriginalExtension();

            request()->velo_image->move(public_path('images'), $velo_image);
        }
        $velos=Velo::findOrFail($id);


        $velos->update([
           
            'velo_name'=> $request->velo_name,
            'category_id'=> $request->category_id,
            'velo_spefication'=> $request->velo_spefication,
            'velo_prix_location'=> $request->velo_prix_location,
            'velo_availability'=> $request->velo_availability,
          
            
            'velo_image' => $velo_image

        
        ]);

        // $velo = Velo::find($request->hidden_id);
        // $category= Category::findOrFail($request->category_id);
        // // $velo= Category::findOrFail($request->category_id) ->velos()->where('id', $velo_id)->first();
        // $category->velos()->where('id', $velo_id)->update([
        //     $input,
        //     'velo_image' => $velo_image

        // ]);


        return redirect("velo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Velo $velo)
    {
        //
        $velo->delete();

        return redirect()->route('velo.index')->with('success', 'Velo Data deleted successfully');
    }
}
