<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    function index()
    {
    	$data=Service::all();
    	return view('admin.service.index',compact("data"));
    }

    function create()
    {
    	return view("admin.service.create");
    }

    function store(Request $request)
    {
    	$data=new Service;
    	$data->icon=$request->icon;
    	$data->name=$request->name;
    	$data->description=$request->description;
    	$data->save();

    	return redirect()->route('services.index')->with("success","Service Created");
    }

    function edit($id)
    {
    	$data=Service::find($id);
    	if($data)
    	{
    		return view('admin.service.edit',compact("data"));
    	}
    	else{
    		return redirect()->route('services.index')->with("danger","Invalid calling");
    	}
    }
    function update($id,Request $request)
    {
    	$data=Service::find($id);
    	if($data)
    	{
	    	$data->icon=$request->icon;
	    	$data->name=$request->name;
	    	$data->description=$request->description;
	    	$data->save();

	    	return redirect()->route('services.index')->with("success","Service Updated");
    	}
    	else{
    		return redirect()->route('services.index')->with("danger","Invalid calling");
    	}
    }
    function destroy($id)
    {
    	$data=Service::find($id);
    	if($data)
    	{
    		$data->delete();
    		return redirect()->route('services.index')->with("success","Service Deleted");
    	}
    	else{
    		return redirect()->route('services.index')->with("danger","Invalid calling");
    	}
    }
}
