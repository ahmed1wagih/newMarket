<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\aboutSetting;
use Response;
use Session;
use Redirect;

class AboutSettingController extends Controller
{
public function index()
    {
        
        $settings = aboutSetting::paginate(30);
        return view('admin.aboutsettings.index', compact('settings'));

    }

   


    public function create()
    {
        
        return view('admin.aboutsettings.create');

    }

    


    public function store(Request $request)
    {
    
        $settings = aboutSetting::create($request->all());
        if($request->hasFile('file')){
            $path = public_path();
            $destinationPath = '';
            $filename        = '';
            $destinationPath = $path.'/uploads/aboutsettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            $settings->file  = 'uploads/aboutsettings/'.$name ;
            }
        
        
    
         if ($settings->save()){
            Session::flash('save','تم أضافة إعداد جديد');
            return Redirect::to('admin/aboutsettings');
         }else{
            Session::flash('error','حدث خطا حاول الرفع مرة اخرى');
            return Redirect::to('admin/aboutsettings/create');
         }


    }

   


    public function show($id)
    {
        //
    }

    


    public function edit($id)
    {
        $edit = aboutSetting::find($id);
        return view('admin.aboutsettings.edit', compact('edit'));
    }

    


    public function update(Request $request, $id)
    {
        // $requests=$request->all();
       
        $settings = aboutSetting::find($id);   
        $settings->fill($request->all())->save();

        if($request->hasFile('file')){
            $path = public_path();
            $destinationPath = '';
            $filename        = '';
            $destinationPath = $path.'/uploads/aboutsettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            // $requests['file']='uploads/settings/'.$name;
            
            $settings->file  = 'uploads/aboutsettings/'.$name ;
            }
        
          

        

        if($settings->save())
        {
            Session::flash('save','تم تعديل البيانات بنجاح');
            return Redirect('admin/aboutsettings');
        }else{
            Session::flash('error','حدث خطا حاول التعديل مرة اخرى');
            return Redirect('aboutsettings/'.$id.'/edit');
        }



    }

   


    public function destroy($id)
    {
        $delete = aboutSetting::find($id);
        $delete->delete();
        Session::flash('save','تم حذف الإعداد بنجاح');
        return Redirect('admin/aboutsettings');
    }
}
