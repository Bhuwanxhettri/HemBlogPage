<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
     // admin login form 😊
     public function adminLogin()
     {
         return view('Admin/adminLogin');
     }

    
    //  admin login checked 
    public function adminloginSystem(Request $request)
    {
         $request->validate(
            [
                'uname' => 'required',
                'password' => 'required',
            ]
        );

        $admin=AdminLogin::where('uname', '=' , $request->uname)->first(); // for checking the email is in db or not 😊

        if($admin)
        {
              if(Hash::check($request->password, $admin->password)){
                    $request->session()->put('adminloginID',$admin->id); // storing admin id in session
                    return view('Admin/adminDashboard');

              }else{
                  return back()->with('fail','Password not matches.');
              }
        }else{
            return back()->with('fail','User Name is worng');
        }
    }

    public function adminlogout()
    {
             
             if(Session::has('adminloginID')){
                 Session::pull('adminloginID');
        
                 return view('welcome');
             }   
    }

      // admin Dashboard 😊
    public function admindashboard()
    {
        return view('Admin/adminDashboard');
    }
}
