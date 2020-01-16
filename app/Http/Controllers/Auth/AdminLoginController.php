<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Validator;
use DB;
use Auth;

class AdminLoginController extends Controller
{


    public function __construct(){
		$this->middleware('guest:admin', ['except' => ['logout']]);
	}

    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function showRegForm(){
          return view('auth.adminregister');
    }
    public function vendor_register(Request $Request){
      
      $name=$Request->input('name'); 
      $email=$Request->input('email'); 
     
      $Pass=$Request->input('password'); 
      $confirm=$Request->input('confirm'); 
      $job_title='vendor';
      $Password=Hash::make($Pass);
      $validator  = Validator::make($Request->all(), [
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:admins',
           'password' => 'required|string|min:6|confirmed',
           'password_confirmation' => 'required|same:password',
       ]);

    if ($validator->fails()) {
     return redirect()->back()->with('errorMessage','Please enter all Details');
    } else {
    DB::table('admins')->insert(['name' => $name,'email' => $email,'role' => "vendor",'password' => $Password, 'created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]);
      return redirect()->back()->with('successMessage','registration successfully');
    }
   }

    public function login(Request $request){
    	//Validate the form data

    	$this->Validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);
    	// Attempt to log the user in

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {

    		//if successfull
    		return redirect()->intended(route('admin.dashboard'));

    	}
    	//if fails
    	return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

}
