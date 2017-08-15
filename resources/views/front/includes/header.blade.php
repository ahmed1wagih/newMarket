<!DOCTYPE html>
<html>

<head>
    <title>الصفقة الرابحة اون لاين</title>
    <meta name="author" content="Amir Nageh">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Css Files -->
    {!! Html::style('public/css/bootstrap.css') !!}
    {!! Html::style('public/css/animate.css') !!}
    {!! Html::style('public/css/font-awesome.css') !!}
    {!! Html::style('public/css/owl.carousel.css') !!}
    {!! Html::style('public/css/owl.theme.css') !!}
    {!! Html::style('public/css/materialize.min.css') !!}

    {!! Html::style('public/css/style.css') !!}
    {!! Html::style('public/css/style-en.css') !!}
    {!! Html::style('public/images/favicon.png') !!}

    @yield('style')

    
   
</head>

<body>
@php  $user=Auth::user() @endphp

{{-- {{ dd($user->email) }} --}}
@yield('loading')

    
  




     
               
                    @if (Auth::guard()->check()) 

                        <div class="wrapper col-xs-12">
        <section class="sticky1 col-xs-12">
            <nav class="navbar navbar-default text-center col-xs-12">
                <div class="container">
                    <div class="navbar-header navbar-right">
                        <a class="navbar-brand" href="{{ url('/') }}" title="إسم الموقع">
                            <h1>الصفقة الرابحة اون لاين</h1> </a>
                    </div>

                    <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/') }}">الرئيسية</a></li>
                            <li><a href="{{ url('/allads') }}">خدماتنا</a></li>
                            <li><a href="{{ url('/about') }}">من نحن</a></li>
                            <li><a href="{{ url('/contact') }}">اتصل بنا</a></li>
                            <li>
                                <a class="open-search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <!--
                            <li>
    <a href="#">
        <i class="fa fa-user"></i> التسجيل
    </a>
</li>
-->
                            <li class="user-logged">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                    <span class="cont-img">
                                    @if($user->file!=null)
                                        <img src="{{ asset('public/'.$user->file) }}" width="35" height="35" alt="User-Img">
                                    @else
                                        <img src="{{ asset('public/images/avatar5.png') }}" width="35" height="35" alt="User-Img">
                                    @endif
                                </span>
                                    <b>{{ $user->name }}</b>
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                    <div class="drop drop-links col-xs-12">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/profile')}}">
                                                    <i class="fa fa-user"></i>&nbsp; حسابي
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/logout') }}">
                                                    <i class="fa fa-power-off"></i>&nbsp; خروج
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end drop -->
                                </ul>
                            </li>
                            <li class="user-logged">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                    <b>حدد اللغة</b>
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                    <div class="drop drop-links col-xs-12">
                                        <ul>
                                            <li>
                                                <a href="about.html">
                                                     عربي
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about-en.html">
                                                     ENG
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end drop -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- end container -->
            </nav>
            <nav>
                <a href="#" data-activates="mobile-demo" class="button-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
            <div class="search-box col-xs-12">
                <div class="container">
                    <form action="#" method="get">
                        <input type="text" placeholder="ابحث في الموقع" autofocus>
                        <button type="submit" class="waves-effect waves-light">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <!-- end container -->
            </div>
            <!-- end search-box -->
        </section>
        <!-- end header -->
        <nav>
            <div class="nav-wrapper">
                <a href="#" data-activates="mobile-demo" class="button-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="sliding-nav">
                    <ul class="side-nav" id="mobile-demo">
                        <li>
                            <form action="#" class="nav-form">
                                <input type="text" placeholder="ابحث في الموقع">
                            </form>
                        </li>
                        <!--
                        <li>
                            <a href="#" class="show-up">
                                <i class="fa fa-user"></i> التسجيل في الموقع
                            </a>
                        </li>
-->
                        <li class="user-logged open-down">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                <span class="cont-img">
                                    <img src="images/avatar5.png" width="35" height="35" alt="User-Img">
                                </span>
                                <b>امير ناجح</b>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <div class="out-logged">
                                <a href="{{ url('profile') }}">
                                    <i class="fa fa-user"></i> حسابي
                                </a>
                                <a href="{{ url('logout') }}">
                                    <i class="fa fa-power-off"></i> خروج
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/') }}" class="active">
                                <i class="fa fa-home"></i> الرئيسية
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/allads') }}">
                                <i class="fa fa-paper-plane"></i> خدماتنا
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('about') }}">
                                <i class="fa fa-exclamation"></i> من نحن
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('contact') }}">
                                <i class="fa fa-envelope"></i> اتصل بنا
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-whatsapp"></i> +01202154542481
                            </a>
                        </li>
                        <li class="user-logged">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                <b>حدد اللغة</b>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <div class="drop drop-links col-xs-12">
                                    <ul>
                                        <li>
                                            <a href="about.html">
                                                     عربي
                                                </a>
                                        </li>
                                        <li>
                                            <a href="about-en.html">
                                                     ENG
                                                </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end drop -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end sliding-nav -->
            </div>
            <!-- end nav-wrapper -->
        </nav>

                
                    @else 
                        <section class="header col-xs-12">
                         <nav class="navbar navbar-default text-center col-xs-12">
                         <div class="container">
                        
                        <div class="navbar-header navbar-right">
                        <a class="navbar-brand" href="{{ url('/') }}" title="الصفقة الرابحة اون لاين">
                               
                                                  {{--  <img src="{{ asset('public/images/logo-3.jpg') }}" alt="" class="img-responsive"> --}}
                            <h1>الصفقة الرابحة اون لاين</h1>
                        </a>
                        </div>


                        <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/') }}">الرئيسية</a></li>
                            <li><a href="{{ url('/allads') }}">جميع الاعلانات</a></li>
                            <li><a href="{{ url('/about') }}">من نحن</a></li>
                            <li><a href="{{ url('/contact') }}">اتصل بنا</a></li>
                            <li>
                                <a class="open-search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/login') }}">
                                    <i class="fa fa-user"></i> التسجيل
                                </a>
                            </li>
                            
                            

                            <li class="user-logged">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal">
                                    <b>حدد اللغة</b>
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                    <div class="drop drop-links col-xs-12">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/') }}">
                                                     عربي
                                                </a>
                                            </li>
                                            <li>
                                                <a href="index-en.html">
                                                     ENG
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end drop -->
                                </ul>
                            </li>
                        </ul>
                        </div>

                        <!-- /.navbar-collapse -->
                </div>
                <!-- end container -->



                 </nav>
            <div class="search-box col-xs-12">
                <div class="container">
                    <form action="#" method="get">
                        <input type="text" placeholder="ابحث في الموقع" autofocus>
                        <button type="submit" class="waves-effect waves-light">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <!-- end container -->
            </div>
            <!-- end search-box -->
            <nav>
                <div class="nav-wrapper">
                    <a href="#" data-activates="mobile-demo" class="button-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="sliding-nav">
                        <ul class="side-nav" id="mobile-demo">
                            <li>
                                <form action="#" class="nav-form">
                                    <input type="text" placeholder="ابحث في الموقع">
                                </form>
                            </li>
                            <!--
                        <li>
                            <a href="#" class="show-up">
                                <i class="fa fa-user"></i> التسجيل في الموقع
                            </a>
                        </li>
}
-->
                            
                    </div>
                    
                    <!-- end sliding-nav -->
                </div>
                <!-- end nav-wrapper -->
            </nav>

                    @endif



                    

                    
                
           

        </section>
        <!-- end header -->
        @yield('slider')