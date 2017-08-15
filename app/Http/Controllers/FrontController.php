<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use DB;

class FrontController extends Controller
{
    public function index(){

        $cats = Category::all();
        $products = DB::table('products')
                     ->orderBy('updated_at','desc')
                     ->take(8)
                     ->get();
    	return view('welcome', compact('cats', 'products'));
    }

    public function allads(){

    	return view('front.allads');
    }

    public function about(){

    	return view('front.about');
    }

    public function contact(){

    	return view('front.contact');
    }

    public function login(){

    	return view('front.login');
    }

    public function newad(){

    	return view('front.newad');
    }

    public function policy(){

    	return view('front.policy');
    }

    
    public function contactok(){

        return view('front.contactok');
    }

    public function contactno(){

        return view('front.contactno');
    }

}
