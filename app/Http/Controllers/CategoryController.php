<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Velo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Category::latest()->paginate(5);
        $data = Category::latest()->orderBy('id','desc')->paginate(1);

        return view('category.index', compact('data'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $validatedData =  $request->validate([
            'category_name'          =>  'bail|required',
        
        ], [
            'category_name.required' => 'Please Input category Name',
            
          
            
        ]);
        //
        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
       
        Category::create([
            'category_name'=>$request->category_name
        ]);
      
        return redirect()->route('category.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        // $request->validate([
        //     'category_name' => 'bail|required',
        // ]);
        $validatedData =  $request->validate([
            'category_name'          =>  'bail|required||unique:category',
        
        ], [
            'category_name.required' => 'Please Input category Name',
            
          
            
        ]);
        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
       
        
        $category->fill($request->post())->save();

        return redirect()->route('category.index')->with('success','category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $category_id)
    {
        //
        $velo= Velo::where('category_id',$category_id)->get();
        $velo->each->delete();
        Category::find($category_id)->delete();
       $notification = array(
           'message' => 'Category Delete Successfully',
           'alert-type' => 'error'
       );   
        // Category::findOrFail($category_id)->delete();
        return redirect()->route('category.index')->with('success', 'category deleted successfully with all its products.');
    }
}
