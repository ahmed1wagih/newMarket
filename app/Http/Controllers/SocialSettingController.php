<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\socialSetting;
use Response;
use Redirect;
use Session;

class SocialSettingController extends Controller
{
    


    public function index()
    {
        $settings = SocialSetting::paginate(30);
        return view('admin.socialsettings.index', compact('settings'));
    }

    


    public function create()
    {
        return view('admin.socialsettings.create');
    }

   


    public function store(Request $request)
    {

        $settings = socialSetting::create($request->all());
        if($request->hasFile('file')){
            $destinationPath = public_path().'/uploads/socialsettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            $settings->file  = 'uploads/socialsettings/'.$name ;
            }
        
        
    
         if ($settings->save()){
            Session::flash('save','تم أضافة إعداد جديد');
            return Redirect::to('admin/socialsettings');
         }else{
            Session::flash('error','حدث خطا حاول الرفع مرة اخرى');
            return Redirect::to('admin/socialsettings/create');
         }
    }

    


    public function show($id)
    {
        //
    }

    


    public function edit($id)
    {

        $edit = socialSetting::find($id);
        return view('admin.socialsettings.edit', compact('edit'));


    }

    


    public function update(Request $request, $id)
    {
        
        $settings = socialSetting::find($id);   
        $settings->fill($request->all())->save();

        if($request->hasFile('file')){
            $path = public_path();
            $destinationPath = $path.'/uploads/socialsettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path
            
            $settings->file  = 'uploads/socialsettings/'.$name ;
            }
        
          

        

        if($settings->save())
        {
            Session::flash('save','تم تعديل البيانات بنجاح');
            return Redirect('admin/socialsettings');
        }else{
            Session::flash('error','حدث خطا حاول التعديل مرة اخرى');
            return Redirect('socialsettings/'.$id.'/edit');
        }


    }

    


    public function destroy($id)
    {
        $delete = socialSetting::find($id);
        $delete->delete();
        Session::flash('save','تم حذف الإعداد بنجاح');
        return Redirect('admin/socialsettings');
    }
}
