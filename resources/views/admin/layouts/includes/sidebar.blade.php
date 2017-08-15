
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->


            <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

        
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
         

         
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
          
            

              <li><a href="{{url('admin/users')}}"><i class="fa fa-user"></i><span>الأعضاء<span class="label label-danger"></span></span></a></li>
              <li><a href="{{url('admin/categories')}}"><i class="fa fa-th"></i><span>الأقسام<span class="label label-danger"></span></span></a></li>


              <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>الإعدادت</span>
                <i class="fa fa-angle-left pull-left"></i>
              </a>

              <ul class="treeview-menu">
              <li><a href="{{url('admin/homesettings')}}"><i class="fa fa-circle"></i><span>إعدادات الرئيسية<span class="label label-danger"></span></span></a></li>
              <li><a href="{{url('admin/aboutsettings')}}"><i class="fa fa-circle"></i><span>إعدادات معلومات عنا<span class="label label-danger"></span></span></a></li>
              <li><a href="{{url('admin/contactsettings')}}"><i class="fa fa-circle"></i><span>إعدادات إتصل بنا<span class="label label-danger"></span></span></a></li>
             
              <li><a href="{{url('admin/termssettings')}}"><i class="fa fa-circle"></i><span>إعدادات الشروط و الأحكام<span class="label label-danger"></span></span></a></li>
              <li><a href="{{url('admin/footersettings')}}"><i class="fa fa-circle"></i><span>إعدادات الفوتر<span class="label label-danger"></span></span></a></li>
              <li><a href="{{url('admin/socialsettings')}}"><i class="fa fa-circle"></i><span>إعدادات السوشيال ميديا<span class="label label-danger"></span></span></a></li>
              </ul>
              </li>

              <li><a href="{{url('admin/contact')}}"><i class="fa fa-envelope"></i><span>رسائل إتصل بنا<span class="label label-danger"></span></span></a></li>



              
             
            




           
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>



