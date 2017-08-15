@extends('admin/layouts/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>أضف إعداد</h1>
      <br\>
      <ol class="breadcrumb">
        <li><a href="{{Url('/')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/termssettings')}}"> التحكم فى إعدادات الشروط و الأحكام</a></li>
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
            'url'=>'admin/termssettings',
            'class'=>'form-horizontal',
            'role'=>'form',
            'method' => 'POST',
            'files'=>true    
            
            ))!!}

           <div class="form-group @if($errors->has('name')) has-error @endif">
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="اسم الإعداد">
                <strong class="help-block">{{ $errors->first('name') }}</strong> 
              </div>
           </div>




          <div class="form-group @if($errors->has('ar_text')) has-error @endif">
              <div class="col-md-10">
                <input type="text" class="form-control" name="ar_text" value="{{old('ar_text')}}"  placeholder="النص بالعربية">
                 <strong class="help-block">{{ $errors->first('ar_text') }}</strong>
              </div>
           </div>



           <div class="form-group @if($errors->has('en_text')) has-error @endif">
              <div class="col-md-10">
                <input type="text" class="form-control" name="en_text" value="{{old('en_text')}}"  placeholder="النص بالإنجليزية">
                 <strong class="help-block">{{ $errors->first('en_text') }}</strong>
              </div>
           </div>




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
                  تسجيل إعداد جديد
              </button>
            </div>
          </div><!-- /.box-footer -->
          {!! form::close() !!}
         

          </div><!-- /.box-body -->



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