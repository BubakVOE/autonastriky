<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            if($request->hasFile("cover")){
                $file=$request->file("cover");
                $imageName=time().'-'.$file->getClientOriginalName();
                $file->move(\public_path("cover/"),$imageName);
    
                $post =new Post([

                    'car' => $request->input('car'),
                    'type' => $request->input('type'),
                    'description' => $request->input('description'),
                    "cover" =>$imageName,

                    "title" =>$request->title,
                    "author" =>$request->author,
                    "body" =>$request->body,
                ]);
               $post->save();
            }
    
                if($request->hasFile("images")){
                    $files=$request->file("images");
                    foreach($files as $file){
                        $imageName=time().'-'.$file->getClientOriginalName();
                        $request['post_id']=$post->id;
                        $request['image']=$imageName;
                        $file->move(\public_path("/images"),$imageName);
                        Image::create($request->all());
    
                    }
                }
    
                return redirect("/dashboard");
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.edit', [
            'posts' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
    {
        $post=Post::findOrFail($id);
        if($request->hasFile("cover")){
            if (File::exists("cover/".$post->cover)) {
                File::delete("cover/".$post->cover);
            }
            $file=$request->file("cover");
            $post->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/cover"),$post->cover);
            $request['cover']=$post->cover;
        }
   
           $post->update([
               "car" =>$request->car,
               "type"=>$request->type,
               "description"=>$request->description,
               "cover"=>$post->cover,
           ]);
   
           if($request->hasFile("images")){
               $files=$request->file("images");
               foreach($files as $file){
                   $imageName=time().'_'.$file->getClientOriginalName();
                   $request["post_id"]=$id;
                   $request["image"]=$imageName;
                   $file->move(\public_path("images"),$imageName);
                   Image::create($request->all());
   
               }
           }
   
           return redirect("/dashboard");
   
       }


    public function deleteimage($id)
    {
        $images=Image::findOrFail($id);

        if (File::exists("images/".$images->image))
        {
           File::delete("images/".$images->image);
        }

       Image::find($id)->delete();
       return back();
   }


    public function deletecover($id)
    {
        $cover=Post::findOrFail($id)->cover;
        
        if (File::exists("cover/".$cover)) 
        {
            File::delete("cover/".$cover);
        }
    return back();
    }





    public function destroy($id)
    {
        $posts=Post::findOrFail($id);

        if (File::exists("cover/".$posts->cover)) {
            File::delete("cover/".$posts->cover);
        }
        $images=Image::where("post_id",$posts->id)->get();
        foreach($images as $image){
        if (File::exists("images/".$image->image)) {
           File::delete("images/".$image->image);
       }
        }
        $posts->delete();
        return back();


   }

}
