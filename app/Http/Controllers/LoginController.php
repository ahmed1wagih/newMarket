<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\User;
use Auth;


class LoginController extends Controller
{
    public function userlog(Request $request){

         $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
            
            
            
            ]);

    	$email = Input::get('email');
    	$password = Input::get('password');

    	// if(Auth::attempt(array('email' => $request->email, 'password' => $request->password))) {


        if (Auth::attempt(['email' => $email, 'password' => $password])) {
           
            return redirect('/');
        }
        else{

    	return redirect('/login');
    }
    }

    

   
}

// public function userlog(Request $request){

//     	  if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))) {
//           return Redirect('logindone');

       
//     }}
