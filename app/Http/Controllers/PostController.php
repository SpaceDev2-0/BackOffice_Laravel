<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\CategoryA;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreatePost()
    {
        $categories = CategoryA::all();
        return view('Post.BackOffice.AddPost')->with('categories', $categories);
    }


    public function AllPost(){
        $Posts=Post::all();
        $categories = CategoryA::all();
        // return view('Post.BackOffice.AllPost')->with('Posts',$Posts);

        return view('Post.BackOffice.AllPost')->with('Posts',$Posts)->with('categories', $categories);
     }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function AddPost(Request $request){

        if($request->hasFile("image")){
            $file=$request->file("image");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);
            $cat_id = CategoryA::where('name', $request->post_categorya)->first();
            // $new_Post->CategoryA_id = $cat_id->id;
            $post =new Post([
            'name' => $request->name,
            'content' =>$request->content,
            // 'date' =>$request->date,
            'categorya_id' => $cat_id->id,
            // 'capacite' =>$request->capacite,
            'img' => $imageName,

            ]);
           $post->save();
        }

        return redirect("/Post/all");



    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Posts=Post::findOrFail($id);
       $categories = CategoryA::all();
        return view('Post.BackOffice.EditPost')->with('Posts',$Posts)->with('categories',$categories);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    
     $Posts=Post::findOrFail($id);
     $cat_id = CategoryA::where('name', $request->post_categorya)->first();
     if($request->hasFile("image")){
         if (File::exists("cover/".$Posts->img)) {
             File::delete("cover/".$Posts->img);
         }
         
         $file=$request->file("image");
         $Posts->img=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/cover"),$Posts->img);
         $request['img']=$Posts->img;
     }
        $Posts->update([
            'name' => $request->name,
            'content' =>$request->content,
            // 'date' =>$request->date,
            'categorya_id' => $cat_id->id,
            // 'capacite' =>$request->capacite,
            'img' => $Posts->img,

        ]);

   

        return redirect("/Post/all");

    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Posts=Post::findOrFail($id);

         if (File::exists("cover/".$Posts->img)) {
             File::delete("cover/".$Posts->img);
         }
    
         $Posts->delete();
         return back();


    }
}
