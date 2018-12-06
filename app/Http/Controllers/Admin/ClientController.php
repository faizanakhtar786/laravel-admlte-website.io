<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientController extends Controller
{
    //fetch all data
    function index()
    {
    	$data=Client::all();
    	return view("admin.client.index",compact("data"));
    }

    function create()
    {
    	return view("admin.client.create");
    }

    function store(Request $request)
    {
    
    	$this->validate($request,[
    		"name"=>"required",
    		
    		"email"=>"required",
    		"rate"=>"required",
    		"feature_image"=>"required"
    		
    	]);

    	$obj=new Client;
    	$obj->name=$request->name;
    	
    	$obj->email=$request->email;
    	$obj->mobile=$request->mobile;
    	$obj->rate=$request->rate;
    	
    	$obj->description=$request->description;
    	$obj->website=$request->website;
    	
    	if($files=$request->file('images')){
    		$images='';
	        foreach($files as $file){
	            $ext=$file->getClientOriginalExtension();
	    		$rand=uniqid();
	    		$image=$rand.'.'.$ext;
	            $file->move('uploads/client/',$image);
	            $images.='client/'.$image."-&";
	        }
	        $obj->images=$images;
	    }
	    
    	if($request->hasFile("feature_image")):
    		$ext=$request->file("feature_image")->getClientOriginalExtension();
    		$rand=uniqid();
    		$image=$rand.'.'.$ext;
    		$request->file("feature_image")->move(public_path("uploads/clients"),$image);
    		$obj->feature_image="clients/".$image;
    	endif;
 		$obj->save();
    	return redirect()->route('client-list')->with("success","Client Created");
    }
    function edit($id)
    {
    	$data=Client::find($id);
    	if($data):
    		return view("admin.client.edit",compact("data"));
    	else:
    		return redirect()->route('client-list')->with("danger","Invalid calling");
    	endif;
    }
    function update($id,Request $request)
    {
    	$this->validate($request,[
    		"name"=>"required",
    		
    		"email"=>"required",
    		"rate"=>"required"
    		
    	]);

    	$obj=Client::find($id);
    	$obj->name=$request->name;
    	
    	$obj->email=$request->email;
    	$obj->mobile=$request->mobile;
    	$obj->rate=$request->rate;
    	
    	$obj->description=$request->description;
    	$obj->website=$request->website;
    	if($files=$request->file('images')){
    		$images='';
	        foreach($files as $file){
	            $ext=$file->getClientOriginalExtension();
	    		$rand=uniqid();
	    		$image=$rand.'.'.$ext;
	            $file->move('uploads/client/',$image);
	            $images.='client/'.$image."-&";
	        }
	        $obj->images=$images;
	    }
	    
    	if($request->hasFile("feature_image")):
    		$ext=$request->file("feature_image")->getClientOriginalExtension();
    		$rand=uniqid();
    		$image=$rand.'.'.$ext;
    		$request->file("feature_image")->move(public_path("uploads/clients"),$image);
    		$obj->feature_image="clients/".$image;
    	endif;
 		$obj->save();

    	return redirect()->route('client-list')->with("success","Client Updated");
    }
    function destroy($id)
    {
    	$data=Client::find($id);
    	if($data):
    		$data->delete();
    		return redirect()->route('client-list')->with("success","Client Deleted");
    	else:
    		return redirect()->route('client-list')->with("danger","Invalid calling");
    	endif;
    }


}
