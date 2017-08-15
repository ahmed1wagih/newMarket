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
      <h1>تعديل بيانات الإعداد :
            {{ $edit->name }}</h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/homesettings')}}"> التحكم فى إعدادات الرئيسية</a></li>
        
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
              'url'=>'admin/homesettings/'.$edit->id,
              'class'=>'form-horizontal',
              'role'=>'form',
              'method' => 'put',
              'files'=>true
          ))!!}

          <div class="form-group @if($errors->has('name')) has-error @endif">
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{$edit->name}}" placeholder="اسم الإعداد">
                <strong class="help-block">{{ $errors->first('name') }}</strong> 
              </div>
           </div>




          <div class="form-group @if($errors->has('ar_text')) has-error @endif">
              <div class="col-md-10">
                <input type="text" class="form-control" name="ar_text" value="{{$edit->ar_text}}"  placeholder="النص بالعربية">
                 <strong class="help-block">{{ $errors->first('ar_text') }}</strong>
              </div>
           </div>



           <div class="form-group @if($errors->has('en_text')) has-error @endif">
              <div class="col-md-10">
                <input type="text" class="form-control" name="en_text" value="{{$edit->en_text}}"  placeholder="النص بالإنجليزية">
                 <strong class="help-block">{{ $errors->first('en_text') }}</strong>
              </div>
           </div>


           @if($edit->file!=null)
              
              <div class="form-group">
            <label for="inputEmail3" class="col-md-2 control-label">الصورة السابقة</label>
            <div class="col-md-10">

               <img height="70px" width="70px" src="{{asset('public/'.$edit->file)}}"/>
            </div>
              @else
              
              @endif


           <div class="form-group">
              <label for="inputEmail3" class="col-md-2 control-label"></label>
              <div class="col-md-10">
                <input type="file" class="form-control" name="file">
              </div>
           </div>


        

           <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class=" fa fa-btn fa-user " style="color: #ffffff"></li>
                 تعديل بيانات الإعداد
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