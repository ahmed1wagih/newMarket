<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;
use Illuminate\Support\Facades\Input;
use Auth;



class sendContactController extends Controller
{
    
    public function sendContact(Request $request){
    	$contact = new Contact;

    	$contact->name = $request->name;
		$contact->email = $request->email;
		$contact->adress = $request->adress;
		$contact->phone = $request->phone;
		$contact->message = $request->message;
    	

    	$contact->save();

    	return redirect('contactok');
	}

	 
}
