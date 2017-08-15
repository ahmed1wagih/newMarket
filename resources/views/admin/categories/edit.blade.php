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
      <h1>تعديل بيانات القسم :
            {{ $edit->name }}</h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/categories')}}"> التحكم فى الأقسام </a></li>
        
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
              'url'=>'admin/categories/'.$edit->id,
              'class'=>'form-horizontal',
              'role'=>'form',
              'method' => 'put',
              'files'=>true
          ))!!}

          <div class="form-group @if($errors->has('name')) has-error @endif">
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{$edit->name}}" placeholder="اسم القسم">
                <strong class="help-block">{{ $errors->first('name') }}</strong> 
              </div>
           </div>




          <div class="form-group @if($errors->has('text')) has-error @endif">
              <div class="col-md-10">
                <input type="text" class="form-control" name="text" value="{{$edit->text}}"  placeholder="الوصف">
                 <strong class="help-block">{{ $errors->first('text') }}</strong>
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
              <select name="color" class="form-control select2" style="width: 100%;">
                <option disabled selected>اللون</option>
                
                <option value="inner b1">تركواز</option>
                <option value="inner b2">برتقالي</option>
                <option value="inner b3">أزرق</option>
                <option value="inner b4">أحمر</option>
                <option value="inner b5">وردي</option>
                <option value="inner b6">بني</option>
                <option value="inner b7">سماوي</option>
                       
                       
              </select>

           </div>
          


           <div class="form-group">
              <label for="inputEmail3" class="col-md-2 control-label">صورة جديدة</label>
              <div class="col-md-10">
                <input type="file" class="form-control" name="file">
              </div>
           </div>


        

           <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class=" fa fa-btn fa-user " style="color: #ffffff"></li>
                 تعديل بيانات القسم
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