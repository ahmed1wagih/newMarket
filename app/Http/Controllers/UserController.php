<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Session;
use Redirect;
use Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(50); 
       return view('admin.users.index', compact('users'));
    }

    


    public function create()
    {
        return view('admin.users.create');

    }

    

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'

            ],
            [
            'name.required' => 'إسم المستخدم مطلوب',
            'password.required' => 'كلمة المرور نطلوبة',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'phone.required' => 'رقم التليفون مطلوب',
            'address.required' => 'العنوان مطلوب'
            ]);
            

         $users = User::create($request->all());
    
         if ($users->save()){
            Session::flash('save','تم أضافة عضو جديد');
            return Redirect::to('admin/users');
         }else{
            Session::flash('error','حدث خطا حاول التسجيل مرة اخرى');
            return Redirect::to('admin/users/create');
         }
    }

    


    public function show($id)
    {
        //
    }

   

    public function edit($id)
    {
        $edit = User::find($id);
        return view('admin.users.edit',compact('edit'));

    }



    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'

            ],
            [
            'name.required' => 'إسم المستخدم مطلوب', 
            'email.required' => 'البريد الإلكتروني مطلوب',
            'phone.required' => 'رقم التليفون مطلوب',
            'address.required' => 'العنوان مطلوب'
            ]);

        $users = User::find($id);
        $users->fill($request->all())->save();

        if($users)
        {
            Session::flash('save','تم تعديل البيانات بنجاح');
            return Redirect('admin/users');
        }else{
            Session::flash('error','حدث خطا حاول التسجيل مرة اخرى');
            return Redirect('users/'.$id.'/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $delete = User::find($id);
        $delete->delete();
        Session::flash('save','تم حذف المستخدم بنجاح');
        return Redirect('admin/users');
    }
}
