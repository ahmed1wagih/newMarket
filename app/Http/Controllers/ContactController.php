<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;
use Response;
use Redirect;
use Session;

class ContactController extends Controller
{
    


    public function index()
    {
        $contacts = Contact::paginate(30);
        return view('admin.contact.index', compact('contacts'));
    }

    


    public function create()
    {
        //
    }

    


    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    

    
    public function destroy($id)
    {
        $delete = Contact::find($id);
        $delete->delete();
        Session::flash('save','تم حذف الطلب بنجاح');
        return Redirect('admin/contact');
    }
}
