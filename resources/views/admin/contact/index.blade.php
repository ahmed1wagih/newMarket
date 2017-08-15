@extends('admin/layouts/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<style type="text/css">
  .content-header > .breadcrumb {
    float: right;
    background: transparent;
    margin-top: 0;
    margin-bottom: 0;
    text-align: left;
    font-size: 12px;
    padding: 7px 5px;
    position: absolute;
    top: 86px;
    left: 10px;
    border-radius: 2px;
}

.content-header > .breadcrumb {
    float: right;
    background: transparent;
    margin-top: 0;
    margin-bottom: 0;
    text-align: left;
    font-size: 12px;
    padding: 7px 5px;
    position: absolute;
    top: 86px;
    right: 200px;
    left: 10px;
    border-radius: 2px;
}
a.btn.btn-primary.add_user {
    float: left;
}

.select-add {
    display: inline-block;
}

.add_user {
    display: inline-block;
    float: left;
}
.content-header div h1 {
    margin-bottom: 50px;
}
.content-header select {
    background: #3c8dbc;
    color: #fff;
    width: 130px;
    padding: 2px 2px;
    border: none;
    border-radius: 4px;
    outline: none;
}

.iradio_flat-green.checked {
    background-position: -110px 0;
}
footer.main-footer {
    text-align: center;
}
</style>


<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">


   <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="text-center">
    <h1>رسائل إتصل بنا</h1>
    </div>
  <div class="select-add">

  

  </div>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/contact')}}">عرص رسائل إتصل بنا</a></li>
     </ol>

     

    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

           <?php $save_chack = Session::get('save');?>
                  @if(!empty($save_chack))
                  <div class="container-fluid">
                  <div class="alert alert-dismissable alert-success">
                  <button class="close" aria-hidder="true" data-dismiss="alert">&times;</button>
                  <h4>{{Session::get('save') }}</h4>
          
                  </div>
                  </div>
                  @endif
        
        
                <?php $error_check = Session::get('error');?>
                @if(!empty($error_check))
                <div class="container-fluid">
                <div class="alert alert-dismissable alert-danger">
                <button class="close" aria-hidder="true" data-dismiss="alert">&times;</button>
                  <h4>{{Session::get('error') }}</h4>
          
                </div>
                </div>
                @endif
         
            <!-- /.box-header -->
          <div class="box-body">
        <table id="" class="table table-bordered table-striped">
          <thead>
           
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">الإسم</th>
              <th class="text-center">البريد الإلكتروني</th>
              <th class="text-center">العنوان</th>
              <th class="text-center">رقم الهاتف</th>
              <th class="text-center">الرسالة</th>
              <th class="text-center">حذف</th>
             
            </tr>
          </thead>
          </tbody>
         <tbody>
          @php $count = 1; @endphp
          @foreach($contacts as $contact)
            <tr>
            <td class="text-center">{{$count}}</td>
            <td class="text-center">{{$contact->name}}</td>
            <td class="text-center">{{$contact->email}}</td>
            <td class="text-center">{{$contact->adress}}</td>
            <td class="text-center">{{$contact->phone}}</td>
            <td class="text-center">{{$contact->message}}</td>
            
            <td class="text-center">
  
               {{Form::open(array('method'=>'delete','url'=>'admin/contact/'.$contact->id))}}
  
              <button type="submit" class="btn btn-danger fa fa-trash-o"></button>

              {{Form::close()}}
               
              </td>

             
              </tr>
               @php $count ++; @endphp
              @endforeach
          </tbody>
          



          </table>
           {!! $contacts->render() !!}

      </div><!-- /.box-body -->
          </div>
          <!-- /.box -->

         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

 
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->



@stop