<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
class AdminController extends Controller
{

   public function adminLoginForm(){
      return redirect('/');
   }

    public function adminLogin(Request $request){
        $request->validate([
           'email'=>'required',
           'password'=>'required',
        ]);
        echo $request->email;
        echo $request->password;
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
           return redirect('/admin/admin_dashboard');
        }else{
         
           return redirect()->back()->withErrors([
               'email' => 'Invalid Email or Password !!! please try again....',
               
           ]);
        }
}

 //   ///    mehtod for admin logout  ///////           ///

 public function adminLogout(){
   Auth::guard('admin')->logout();
   return redirect('/');
  }
  


}
