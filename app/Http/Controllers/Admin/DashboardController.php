<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Hash;
use App\User;

class DashboardController extends Controller
{
    //
    function index()
    {
       
    	return view("admin.dashboard");
    }
    function profileSetting()
    {
    	return view("admin.profileSetting");
    }
    function changePassword()
    {
    	return view("admin.changePassword");
    }
    function updateChangePassword(Request $res)
    {
        $this->validate($res,[
            "password"=>"required",
            "npassword"=>"required",
            "cpassword"=>"required"

        ]);
        $user=Auth::user();//aapne session ka pura data fetch
        $password=($res->password);
        $data=User::find($user->id);//session ke user ke id se user wale table se data
        //dd($data);
        $cpassword=$res->npassword;
    
        if(Hash::check($password,$data->password))
        {
            $data->password=bcrypt($cpassword);
            if($data->save())
            {
           
                return redirect()->route('change')->with("success","Password is Changed");
            }
            else
            {
                Session::flash("danger","Some thong");
                return redirect()->route('change')->with("danger","Some thong");
            }
        }
        else
        {
            Session::flash("danger","Password is not correct");
                return redirect()->route('change')->with("danger","Password is not correct");
        }

    }
    function setting()
    {
    	return view("admin.setting");
    }
}
