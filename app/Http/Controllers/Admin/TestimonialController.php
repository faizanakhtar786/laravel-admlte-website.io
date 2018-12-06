<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use File;

class TestimonialController extends Controller
{
    //
     function index()
    {
    	$data=Testimonial::all();
    	return view("admin.testimonial.index",compact("data"));
    }
    function create()
    {
    	return view("admin.testimonial.create");
    }
    function store(Request $request)
    {
    	$this->validate($request,[
    		"name"=>"required",
    		"email"=>"required|unique:testimonial,email",
    		"message"=>"required",
    		
    		"image"=>"required"
    	]);

    	$obj=new Testimonial;
    	$obj->name=$request->name;
    	$obj->email=$request->email;
    	$obj->mobile=$request->mobile;
    	$obj->designation=$request->designation;
    	$obj->facebook=$request->facebook;
    	$obj->twitter=$request->twitter;
    	$obj->google=$request->google;
    	$obj->company=$request->company;
    	$obj->message=$request->message;
    	if($request->hasFile("image")):
    		$ext=$request->file("image")->getClientOriginalExtension();
    		$rand=uniqid();
    		$image=$rand.'.'.$ext;
    		$request->file("image")->move(public_path("uploads/testimonial"),$image);
    		$obj->image="testimonial/".$image;
    	endif;
 		$obj->save();

    	return redirect()->route("testimonial-list")->with("success","inserted");
    }

    function destroy($id)
    {
        $data=Testimonial::find($id);
        if($data):
            if(File::exists($data->image)):
                File::delete($data->image);
            endif;
            $data->delete();

             return redirect()->route("testimonial-list")->with("success","Deleted");
        else:
            return redirect()->route("testimonial-list")->with("danger","Invlid Calling");
        endif;
        
    }
    function edit($id)
    {
        $data=Testimonial::find($id);
        if($data):
           return view("admin.testimonial.edit",compact("data"));
        else:
            return redirect()->route("testimonial-list")->with("danger","Invlid Calling");
        endif;
        
    }

     function update($id,Request $request)
    {
        $this->validate($request,[
            "name"=>"required",
            "email"=>"required|unique:testimonial,email,$id",
            "message"=>"required"
        ]);

         $obj=Testimonial::find($id);
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->mobile=$request->mobile;
        $obj->designation=$request->designation;
        $obj->facebook=$request->facebook;
        $obj->twitter=$request->twitter;
        $obj->google=$request->google;
        $obj->company=$request->company;
        $obj->message=$request->message;
        if($request->hasFile("image")):
            $ext=$request->file("image")->getClientOriginalExtension();
            $rand=uniqid();
            $image=$rand.'.'.$ext;
            $request->file("image")->move(public_path("uploads/testimonial"),$image);
            $obj->image="testimonial/".$image;
        endif;
        $obj->save();

        return redirect()->route("testimonial-list")->with("success","Updated");
    }
}
