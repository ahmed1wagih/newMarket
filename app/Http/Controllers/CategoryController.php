<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Redirect;
use Response;
use Session;

class CategoryController extends Controller
{
   


    public function index()
    {
        $cats = Category::paginate(50);
        return view('admin.categories.index', compact('cats'));
    }

    


    public function create()
    {

        return view('admin.categories.create');

    }

    


    public function store(Request $request)
    {
        
        $cats = Category::create($request->all());
        if($request->hasFile('file')){
            $destinationPath = public_path().'/uploads/categories'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            $cats->file  = 'uploads/categories/'.$name ;
            }
        
        
    
         if ($cats->save()){
            Session::flash('save','تم أضافة قسم جديد');
            return Redirect::to('admin/categories');
         }else{
            Session::flash('error','حدث خطا حاول الرفع مرة اخرى');
            return Redirect::to('admin/categories/create');
         }
    }

   


    public function show($id)
    {
        //
    }

    


    public function edit($id)
    {
        

         $edit = Category::find($id);
        return view('admin.categories.edit',compact('edit'));

    }

    


    public function update(Request $request, $id)
    {
        
        $cats = Category::find($id);   
        $cats->fill($request->all())->save();

        if($request->hasFile('file')){
            $path = public_path();
            $destinationPath = $path.'/uploads/categories'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path
            
            $cats->file  = 'uploads/categories/'.$name ;
            }
        
          

        

        if($cats->save())
        {
            Session::flash('save','تم تعديل البيانات بنجاح');
            return Redirect('admin/categories');
        }else{
            Session::flash('error','حدث خطا حاول التعديل مرة اخرى');
            return Redirect('categories/'.$id.'/edit');
        }


    }

    

    public function destroy($id)
    {
        

        $delete = Category::find($id);
        $delete->delete();
        Session::flash('save','تم حذف لقسم بنجاح');
        return Redirect('admin/categories');

    }
}
