<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\Feedback;
use App\Models\Client;
use App\Models\Service;
use Mail;
use App\User;

class FrontController extends Controller
{
    //

    function index()
    {
    
        $sliders=Slider::all();
        $teams=Team::all();
        $page=Page::where(["id"=>"2"])->first();
    	return view("user.index",compact("sliders","teams","page"));
    }
    function about()
    {
        $page=Page::where(["id"=>"1"])->first();
        $testimonials=Testimonial::orderBy("created_at","desc")->get();
    	return view("user.about",compact("page","testimonials"));
    }
    function contact()
    {	
    	return view("user.contact");
    }
    function contactsave(Request $reqest)
    {
         $to = $reqest->email;

         Mail::send('mail.AdminFeedback',
           array(
            'u_email'=>$reqest->email,
               'u_name'=>$reqest->name,
               
               'u_mobile'=>$reqest->mobile,
               'u_message'=>$reqest->message
           ), function($message1) use ($to)
               {
                   $message1->from($to);
                   $message1->to('achalgreenempire@gmail.com')->subject("Achal Green Empire Feedback.");
               });



         Mail::send('mail.ClientFeedback', array('u_name'=>$reqest->name,), function($message1) use ($to)
               {
                   $message1->from('achalgreenempire@gmail.com');
                   $message1->to($to)->subject("Achal Green Empire Feedback.");
               });

         $obj=new Feedback;
         $obj->name=$reqest->name;
         $obj->mobile=$reqest->mobile;
         $obj->email=$reqest->email;
         $obj->massage=$reqest->message;
         $obj->save();
         return redirect()->back()->with("success","Thank you for sending feedback");
    }
    function gallery()
    {
        $galleries=Gallery::all();
        return view("user.gallery",compact("galleries"));
    }
    function client()
    {
        $testimonials=Testimonial::orderBy("created_at","desc")->get();
        $clients=Client::orderBy("created_at","desc")->get();
        return view("user.client",compact("testimonials","clients"));
    }
    function service()
    {
         $teams=Team::all();
         $services=Service::orderBy("created_at","desc")->get();
    	return view("user.service",compact("teams","services"));
    }

    function clientdetail($id)
    {
        $client=Client::find($id);
         $testimonials=Testimonial::orderBy("created_at","desc")->get();
        if($client):
             return view("user.clientdetail",compact("client","testimonials"));
         else:
            return redirect()->back();
         endif;
    }
}
