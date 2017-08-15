@extends('admin/layouts/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
    <br\>
      <h1>تعديل بيانات العضو :
            {{ $edit->name }}</h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/users')}}"> التحكم فى الاعضاء </a></li>
        
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
          <div class="box-header">
          </div>
          <!-- /.box-header -->
           <div class="box-body">
            <!-- form start -->

          {!!Form::open(array(
              'url'=>'admin/users/'.$edit->id,
              'class'=>'form-horizontal',
              'role'=>'form',
              'method' => 'put',
              'files'=>true
          ))!!}

          <div class="form-group @if($errors->has('email')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">البريد الالكترونى</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="email" value="{{$edit->email}}" placeholder="البريد الالكترونى">
              </div>
             <strong class="help-block">{{ $errors->first('email') }}</strong>  
          </div>

          <div class="clearfix"></div>

          <div class="form-group @if($errors->has('name')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">اسم المستخدم</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{$edit->name}}" placeholder="اسم المستخدم">
              </div>
             <strong class="help-block">{{ $errors->first('name') }}</strong>  
           </div>

          {{--  <div class="form-group @if($errors->has('passowrd')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">كلمة المرور</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="passowrd" value="{{$edit->passowrd}}" placeholder="كلمة المرور">
              </div>
             <strong class="help-block">{{ $errors->first('passowrd') }}</strong>  
           </div> --}}


           <div class="clearfix"></div>

          <div class="form-group @if($errors->has('address')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">العنوان بالتفصيل</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="address" value="{{$edit->address}}" placeholder="العنوان بالتفصيل">
              </div>
             <strong class="help-block">{{ $errors->first('address') }}</strong>  
          </div>

          <div class="clearfix"></div>
          
          <div class="form-group @if($errors->has('phone')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">الهاتف</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="phone" value="{{$edit->phone}}" placeholder="الهاتف">
              </div>
             <strong class="help-block">{{ $errors->first('phone') }}</strong>  
          </div>


          
           
     

           <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class=" fa fa-btn fa-user " style="color: #ffffff"></li>
                 تعديل بيانات العضو
              </button>
            </div>
          </div><!-- /.box-footer -->
          </div><!-- /.box-body -->


            <!-- form start -->







          </div>
            
          </div>
          <!-- /.box-header -->         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->



@stop