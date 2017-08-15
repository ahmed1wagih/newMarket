<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\contactSetting;
use Redirect;
use Session;
use Response;

class ContactSettingController extends Controller
{
    

    public function index()
    {
        
        $settings = contactSetting::paginate(30);
        return view('admin.contactsettings.index', compact('settings'));

    }

    


    public function create()
    {
        
        return view('admin.contactsettings.create');

    }

    



    public function store(Request $request)
    {
        $settings = contactSetting::create($request->all());
        if($request->hasFile('file')){
            $destinationPath = public_path().'/uploads/contactsettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            $settings->file  = 'uploads/contactsettings/'.$name ;
            }
        
        
    
         if ($settings->save()){
            Session::flash('save','تم أضافة إعداد جديد');
            return Redirect::to('admin/contactsettings');
         }else{
            Session::flash('error','حدث خطا حاول الرفع مرة اخرى');
            return Redirect::to('admin/contactsettings/create');
         }
    }

    
    public function show($id)
    {
        //
    }

    



    public function edit($id)
    {
        $edit = contactSetting::find($id);
        return view('admin.contactsettings.edit', compact('edit'));
    }

   


    public function update(Request $request, $id)
    {
       
        $settings = contactSetting::find($id);   
        $settings->fill($request->all())->save();

        if($request->hasFile('file')){
            $path = public_path();
            $destinationPath = $path.'/uploads/contactsettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path
            
            $settings->file  = 'uploads/contactsettings/'.$name ;
            }
        
          

        

        if($settings->save())
        {
            Session::flash('save','تم تعديل البيانات بنجاح');
            return Redirect('admin/contactsettings');
        }else{
            Session::flash('error','حدث خطا حاول التعديل مرة اخرى');
            return Redirect('contactsettings/'.$id.'/edit');
        }



    }

    



    public function destroy($id)
    {
        $delete = contactSetting::find($id);
        $delete->delete();
        Session::flash('save','تم حذف الإعداد بنجاح');
        return Redirect('admin/contactsettings');
    }
}
