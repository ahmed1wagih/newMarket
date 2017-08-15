<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Admin;
use Session;
use Redirect;
use Response;


class AdminController extends Controller
{
    public function index(){

    	return view('admin.index');
    }

    public function showlogin(){

    	return view('admin.login');
    }

    public function dologin(){

    	$name = Admin::get('name');
    	$password = Admin::get('password');

    	if(Auth::attemp(['name'=> $name, 'password'=> $password])){
    		return redirect()->route('admin/');
    	}else{
    		return redirect('/');
    	}
    }

    public function notadmin(){
    	return redirect('/');
    }
}
