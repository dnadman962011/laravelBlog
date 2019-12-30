<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class usersController extends Controller
{
   

public function getAdminSignIn()
{
    return view('Admin.SignIn');

}


public function postAdminSignIn(Request $requset)
{
   
 

    
     if(Auth::attempt(['email'=>$requset->input('AdminUserI'),'password'=>$requset->input('AdminPassI')])){
         return redirect()->route('Admin.Dashboard');
     }
     else
     {
     return redirect()->route('Admin.SignIn');
     };
}
    

public function getDashboard()
{
    return view('Admin.Dashboard');
}




public function getLogOut()
{
    Auth::logout();
    return redirect()->route('Admin.SignIn');
}








}
