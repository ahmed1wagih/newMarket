<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TermsSetting;
use Response;
use Redirect;
use Session;

class TermsSettingController extends Controller
{
    


    public function index()
    {
        $settings = TermsSetting::paginate(30);
        return view('admin.termssettings.index', compact('settings'));
    }

    


    public function create()
    {
        
        return view('admin.termssettings.create');

    }

    


    public function store(Request $request)
    {
        $settings = termsSetting::create($request->all());
        if($request->hasFile('file')){
            $destinationPath = public_path().'/uploads/termssettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            $settings->file  = 'uploads/termssettings/'.$name ;
            }
        
        
    
         if ($settings->save()){
            Session::flash('save','تم أضافة إعداد جديد');
            return Redirect::to('admin/termssettings');
         }else{
            Session::flash('error','حدث خطا حاول الرفع مرة اخرى');
            return Redirect::to('admin/termssettings/create');
         }
    }

    



    public function show($id)
    {
        
    }

   


    public function edit($id)
    {
        
        $edit = termsSetting::find($id);
        return view('admin.termssettings.edit',compact('edit'));

    }

    


    public function update(Request $request, $id)
    {
        

        $settings = termsSetting::find($id);   
        $settings->fill($request->all())->save();

        if($request->hasFile('file')){
            $path = public_path();
            $destinationPath = $path.'/uploads/termssettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path
            
            $settings->file  = 'uploads/termssettings/'.$name ;
            }
        
          

        

        if($settings->save())
        {
            Session::flash('save','تم تعديل البيانات بنجاح');
            return Redirect('admin/termssettings');
        }else{
            Session::flash('error','حدث خطا حاول التعديل مرة اخرى');
            return Redirect('termssettings/'.$id.'/edit');
        }

    }

    


    public function destroy($id)
    {
        $delete = termsSetting::find($id);
        $delete->delete();
        Session::flash('save','تم حذف الإعداد بنجاح');
        return Redirect('admin/termssettings');
    }
}
