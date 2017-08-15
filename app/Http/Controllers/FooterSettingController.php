<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\footerSetting;
use Redirect;
use Response;
use Session;

class FooterSettingController extends Controller
{
    


    public function index()
    {
        
        $settings = footerSetting::paginate(30);
        return view('admin.footersettings.index', compact('settings'));

    }

    


    public function create()
    {
        
        return view('admin.footersettings.create');

    }

    


    public function store(Request $request)
    {
        
        $settings = footerSetting::create($request->all());
        if($request->hasFile('file')){
            $destinationPath = public_path().'/uploads/footersettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            $settings->file  = 'uploads/footersettings/'.$name ;
            }
        
        
    
         if ($settings->save()){
            Session::flash('save','تم أضافة إعداد جديد');
            return Redirect::to('admin/footersettings');
         }else{
            Session::flash('error','حدث خطا حاول الرفع مرة اخرى');
            return Redirect::to('admin/footersettings/create');
         }


    }

    


    public function show($id)
    {
        //
    }

    


    public function edit($id)
    {
         $edit = footerSetting::find($id);
        return view('admin.footersettings.edit',compact('edit'));

    }

    


    public function update(Request $request, $id)
    {
        $settings = footerSetting::find($id);   
        $settings->fill($request->all())->save();

        if($request->hasFile('file')){
            $path = public_path();
            $destinationPath = $path.'/uploads/footersettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path
            
            $settings->file  = 'uploads/footersettings/'.$name ;
            }
        
          

        

        if($settings->save())
        {
            Session::flash('save','تم تعديل البيانات بنجاح');
            return Redirect('admin/footersettings');
        }else{
            Session::flash('error','حدث خطا حاول التعديل مرة اخرى');
            return Redirect('footersettings/'.$id.'/edit');
        }

    }

   


    public function destroy($id)
    {
        $delete = footerSetting::find($id);
        $delete->delete();
        Session::flash('save','تم حذف الإعداد بنجاح');
        return Redirect('admin/footersettings');
    }
}
