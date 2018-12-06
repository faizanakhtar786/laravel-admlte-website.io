<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use File;

class GalleryController extends Controller
{
    //
   //
     function index()
    {
    	$data=Gallery::all();
    	return view("admin.gallery.index",compact("data"));
    }

    function create()
    {
    	return view("admin.gallery.create");
    }
    function store(Request $request)
    {
    	$this->validate($request,[
    		"title"=>"required|min:2|max:40",
    		
    		
    		"image"=>"required"
    	]);

    	$lakCategory=new Gallery;
    	$lakCategory->title=$request->title;
    	
    	if($request->hasFile("image")):
    		$ext=$request->file("image")->getClientOriginalExtension();
    		$rand=uniqid();
    		$image=$rand.'.'.$ext;
    		$request->file("image")->move(public_path("uploads/gallery"),$image);
    		$lakCategory->image="gallery/".$image;
    	endif;
    	

    	$lakCategory->save();

    	return redirect()->route("gallery-list")->with("success","inserted");
    }

    function destroy($id)
    {
         $data=Gallery::find($id);
        if($data):
            if(File::exists($data->image)):
                File::delete($data->image);
            endif;
            $data->delete();

             return redirect()->route("gallery-list")->with("success","Deleted");
        else:
            return redirect()->route("gallery-list")->with("danger","Invlid Calling");
        endif;
    
    }
    function edit($id)
    {
         $data=Gallery::find($id);
        if($data):
            return view("admin.gallery.edit",compact("data"));
        else:
            return redirect()->route("gallery-list")->with("danger","Invlid Calling");
        endif;
    
    }

    function update($id,Request $request)
    {
        $this->validate($request,[
            "title"=>"required|min:2|max:40"
        ]);

        $lakCategory=Gallery::find($id);
        $lakCategory->title=$request->title;
        $lakCategory->description=$request->description;
        
        if($request->hasFile("image")):
            $ext=$request->file("image")->getClientOriginalExtension();
            $rand=uniqid();
            $image=$rand.'.'.$ext;
            $request->file("image")->move(public_path("uploads/gallery"),$image);
            $lakCategory->image="gallery/".$image;
        endif;
        

        $lakCategory->save();

        return redirect()->route("gallery-list")->with("success","Updated");
    }

}
