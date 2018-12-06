<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use File;

class PageController extends Controller
{
    //
    function index()
    {
    	$data=Page::all();
    	return view("admin.page.index",compact("data"));
    }

    function create()
    {
    	return view("admin.page.create");
    }
    function store(Request $request)
    {
    	$this->validate($request,[
    		"name"=>"required",
    		
    		"meta_keyword"=>"required",
    		"title"=>"required",
    		
    	]);

    	$obj=new Page;
    	$obj->name=$request->name;
    	
    	$obj->meta_keyword=$request->meta_keyword;
    	$obj->meta_description=$request->meta_description;
    	$obj->title=$request->title;
    	
    	$obj->shortdescription=$request->shortdescription;
    	$obj->longdescription=$request->longdescription;
    	if($request->hasFile("image")):
    		$ext=$request->file("image")->getClientOriginalExtension();
    		$rand=uniqid();
    		$image=$rand.'.'.$ext;
    		$request->file("image")->move(public_path("uploads/pages"),$image);
    		$obj->image="pages/".$image;
    	endif;
 		$obj->save();

    	return redirect()->route("page-list")->with("success","inserted");

    }

    function destroy($id)
    {
         $data=Page::find($id);
        if($data):
            if(File::exists($data->image)):
                File::delete($data->image);
            endif;
            $data->delete();

             return redirect()->route("page-list")->with("success","Deleted");
        else:
            return redirect()->route("page-list")->with("danger","Invlid Calling");
        endif;
    }
    function edit($id)
    {
         $data=Page::find($id);
        if($data):
           return view("admin.page.edit",compact("data"));
        else:
            return redirect()->route("page-list")->with("danger","Invlid Calling");
        endif;
    }

     function update($id,Request $request)
    {
        $this->validate($request,[
            "name"=>"required",
            
            "meta_keyword"=>"required",
            "title"=>"required",
            
        ]);

        $obj=Page::find($id);
        $obj->name=$request->name;
        
        $obj->meta_keyword=$request->meta_keyword;
        $obj->meta_description=$request->meta_description;
        $obj->title=$request->title;
        
        $obj->shortdescription=$request->shortdescription;
        $obj->longdescription=$request->longdescription;
        if($request->hasFile("image")):
            $ext=$request->file("image")->getClientOriginalExtension();
            $rand=uniqid();
            $image=$rand.'.'.$ext;
            $request->file("image")->move(public_path("uploads/pages"),$image);
            $obj->image="pages/".$image;
        endif;
        $obj->save();

        return redirect()->route("page-list")->with("success","updated");

    }
}
