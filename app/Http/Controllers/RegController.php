<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Response;
use Flash;


class RegController extends Controller
{
    public function UserReg(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'policy' => 'required',
            
            ],
            [
            'name' => 'الإسم بالكامل مطلوب',
            'email.required' => 'أسم الخدمة مطلوب',
            'password.required' => 'أسم الخدمة مطلوب',
            'password_confirmation.required' => 'إعادة كلمة المرور مطلوبة',
            'policy.required' => 'لا بد أن توافق علي الشروط و الأحكام',
            
            
            ]);

    	$user = new User;

        $user->name = $request->name;
		$user->email = $request->email;
    	$user->password = Hash::make($request->password);

    	$user->save();

    	return redirect('/registered');

    }

 
   





    public function UserLog(Request $request){

         $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
    ],[
        'email' => 'الإيميل مطلوب',
        'password' => 'كلمة المرور مطلوبة',

    ]);

    $remember_me = $request->has('remember_me') ? true : false; 


    	$email = Input::get('email');
    	$password = Input::get('passowrd');

    	if(Auth::attemp(['email'=>$email, 'password'=>$password], $remember_me)){
    		return redirect('lolo');
    	}else{
    		return redirect('/');
    	}

    }	
	public function lolo(){
		return ('log in');
	}

	public function notlolo(){
		return('error');
	}

    public function registered(){

        return view('front.registered');
    }
}


