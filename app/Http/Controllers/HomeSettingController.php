<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\homeSetting;
use Session;
use Redirect;
use Response;

class HomeSettingController extends Controller
{
    


    public function index()
    {
        
        $settings = homeSetting::paginate(30);
        return view('admin.homesettings.index', compact('settings'));

    }

   


    public function create()
    {
        
        return view('admin.homesettings.create');

    }

    


    public function store(Request $request)
    {
    
        $settings = homeSetting::create($request->all());
        if($request->hasFile('file')){
            $destinationPath = public_path().'/uploads/homesettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            $settings->file  = 'uploads/homesettings/'.$name ;
            }
        
        
    
         if ($settings->save()){
            Session::flash('save','تم أضافة إعداد جديد');
            return Redirect::to('admin/homesettings');
         }else{
            Session::flash('error','حدث خطا حاول الرفع مرة اخرى');
            return Redirect::to('admin/homesettings/create');
         }


    }

   


    public function show($id)
    {
        //
    }

    


    public function edit($id)
    {
        $edit = homeSetting::find($id);
        return view('admin.homesettings.edit', compact('edit'));
    }

    


    public function update(Request $request, $id)
    {
        // $requests=$request->all();
       
        $settings = homeSetting::find($id);   
        $settings->fill($request->all())->save();

        if($request->hasFile('file')){
            $path = public_path();
            $destinationPath = '';
            $filename        = '';
            $destinationPath = $path.'/uploads/homesettings'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            // $requests['file']='uploads/settings/'.$name;
            
            $settings->file  = 'uploads/homesettings/'.$name ;
            }
        
          

        

        if($settings->save())
        {
            Session::flash('save','تم تعديل البيانات بنجاح');
            return Redirect('admin/homesettings');
        }else{
            Session::flash('error','حدث خطا حاول التعديل مرة اخرى');
            return Redirect('homesettings/'.$id.'/edit');
        }



    }

   


    public function destroy($id)
    {
        $delete = homeSetting::find($id);
        $delete->delete();
        Session::flash('save','تم حذف الإعداد بنجاح');
        return Redirect('admin/homesettings');
    }
}
