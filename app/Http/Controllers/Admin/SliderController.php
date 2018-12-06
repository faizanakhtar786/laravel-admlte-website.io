<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use File;

class SliderController extends Controller
{
    //
     function index()
    {
    	$data=Slider::all();
    	return view("admin.slider.index",compact("data"));
    }

    function create()
    {
    	return view("admin.slider.create");
    }
    function store(Request $request)
    {
    	$this->validate($request,[
    		"title"=>"required|min:2",
    		
    		
    		"image"=>"required"
    	]);

    	$lakCategory=new Slider;
    	$lakCategory->title=$request->title;
    	$lakCategory->link=$request->link;
        $lakCategory->content=$request->content;
    	if($request->hasFile("image")):
    		$ext=$request->file("image")->getClientOriginalExtension();
    		$rand=uniqid();
    		$image=$rand.'.'.$ext;
    		$request->file("image")->move(public_path("uploads/slider"),$image);
    		$lakCategory->image="slider/".$image;
    	endif;
    	

    	$lakCategory->save();

    	return redirect()->route("slider-list")->with("success","inserted");
    }

    function destroy($id)
    {
         $data=Slider::find($id);
        if($data):
            if(File::exists($data->image)):
                File::delete($data->image);
            endif;
            $data->delete();

             return redirect()->route("slider-list")->with("success","Deleted");
        else:
            return redirect()->route("slider-list")->with("danger","Invlid Calling");
        endif;
    }
    function edit($id)
    {
         $data=Slider::find($id);
        if($data):
            return view("admin.slider.edit",compact("data"));
        else:
            return redirect()->route("slider-list")->with("danger","Invlid Calling");
        endif;
    }

     function update($id,Request $request)
    {
        $this->validate($request,[
            "title"=>"required|min:2"
        ]);

        $lakCategory=Slider::find($id);
        $lakCategory->title=$request->title;
        $lakCategory->link=$request->link;
        $lakCategory->content=$request->content;
        if($request->hasFile("image")):
            $ext=$request->file("image")->getClientOriginalExtension();
            $rand=uniqid();
            $image=$rand.'.'.$ext;
            $request->file("image")->move(public_path("uploads/slider"),$image);
            $lakCategory->image="slider/".$image;
        endif;
        

        $lakCategory->save();

        return redirect()->route("slider-list")->with("success","Updated");
    }

}
