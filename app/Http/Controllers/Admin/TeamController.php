<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;
use File;

class TeamController extends Controller
{
    //
     function index()
    {
    	$data=Team::all();
    	return view("admin.team.index",compact("data"));
    }
    function create()
    {
    	return view("admin.team.create");
    }
    function store(Request $request)
    {
    	$this->validate($request,[
    		"name"=>"required",
    		"email"=>"required",
    		
    		
    		"image"=>"required"
    	]);

    	$obj=new Team;
    	$obj->name=$request->name;
    	$obj->email=$request->email;
    	$obj->mobile=$request->mobile;
    	$obj->designation=$request->designation;
    	$obj->facebook=$request->facebook;
    	$obj->twitter=$request->twitter;
    	$obj->google=$request->google;
    	$obj->company=$request->company;
    	$obj->description=$request->description;
    	if($request->hasFile("image")):
    		$ext=$request->file("image")->getClientOriginalExtension();
    		$rand=uniqid();
    		$image=$rand.'.'.$ext;
    		$request->file("image")->move(public_path("uploads/team"),$image);
    		$obj->image="team/".$image;
    	endif;
 		$obj->save();

    	return redirect()->route("team-list")->with("success","inserted");
    }

    function destroy($id)
    {
        $data=Team::find($id);
        if($data):
            if(File::exists($data->image)):
                File::delete($data->image);
            endif;
            $data->delete();

             return redirect()->route("team-list")->with("success","Deleted");
        else:
            return redirect()->route("team-list")->with("danger","Invlid Calling");
        endif;
        
    }

    function edit($id)
    {
        $data=Team::find($id);
        if($data):
            return view("admin.team.edit",compact("data"));
        else:
            return redirect()->route("team-list")->with("danger","Invlid Calling");
        endif;
        
    }
    function update($id,Request $request)
    {
        $this->validate($request,[
            "name"=>"required",
            "email"=>"required"
        ]);
         $obj=Team::find($id);
        if($obj):
            $obj->name=$request->name;
            $obj->email=$request->email;
            $obj->mobile=$request->mobile;
            $obj->designation=$request->designation;
            $obj->facebook=$request->facebook;
            $obj->twitter=$request->twitter;
            $obj->google=$request->google;
            $obj->company=$request->company;
            $obj->description=$request->description;
            if($request->hasFile("image")):
                $ext=$request->file("image")->getClientOriginalExtension();
                $rand=uniqid();
                $image=$rand.'.'.$ext;
                $request->file("image")->move(public_path("uploads/team"),$image);
                $obj->image="team/".$image;
            endif;
            $obj->save();

            return redirect()->route("team-list")->with("success","updated");

         else:
            return redirect()->route("team-list")->with("danger","Invlid Calling");
        endif;
    }
}
