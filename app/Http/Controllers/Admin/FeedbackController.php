<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    //
     function index()
    {
    	$data=Feedback::all();
    	return view("admin.feedback.index",compact("data"));
    }

    function create()
    {
    	return view("admin.feedback.create");
    }
    function store(Request $request)
    {
    	$this->validate($request,[
    		"name"=>"required|min:2|max:40",
    		"email"=>"required|email",
    		"mobile"=>"required",
    		"message"=>"required|min:25"
    	]);

    	$lakCategory=new Feedback;
    	$lakCategory->name=$request->name;
    	$lakCategory->email=$request->email;
    	$lakCategory->message=$request->message;
    	$lakCategory->mobile=$request->mobile;
    	
    	

    	$lakCategory->save();

    	return redirect()->route("feedback-list")->with("success","inserted");
    }

    function destroy($id)
    {
    	Feedback::destroy($id);
    	return redirect()->route("feedback-list")->with("success","Deleted");
    }
}
