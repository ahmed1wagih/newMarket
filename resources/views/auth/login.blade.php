@extends('front.layout')
@section('content')

<div class="about-box col-xs-12">
            <div class="about-head col-xs-12 text-center">
                <h1>التسجيل في الموقع</h1>
            </div>
            <!-- end about-head -->
            <div class="about-content forming-content col-xs-12">
                <div class="container">
                    <div class="login-forming col-xs-12">
                        <div class="block col-md-6 col-xs-12 pull-right">
                            <div class="inner-right">
                                <h1>
                                    <i class="fa fa-user"></i>
                                    تسجيل الدخول
                                </h1>
                                <div class="lost-inner">
                                    
                                    {!! Form::open(['url'=>'userlog']) !!}
                                        <div class="lost-item social-item col-md-12 col-xs-12">
                                            <a href="#" class="facebook">
                                                <h3>تسجيل الدخول بواسطة </h3>
                                                <b class="fa fa-facebook"></b>
                                            </a>
                                            <a href="#" class="google">
                                                <h3>تسجيل الدخول بواسطة </h3>
                                                <b class="fa fa-google-plus"></b>
                                            </a>
                                        </div>
                                        <!-- /.lost-item -->
                                        <div class="lost-item col-md-12 col-xs-12 text-center">
                                            <h4>او من خلال الايميل المستخدم</h4>
                                        </div>
                                        <!-- /.lost-item -->
                                        <div class="lost-item col-md-12 col-xs-12">

                                            <span>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <h6>هناك خطأ باالبريد الإلكتروني</h6>
                                            البريد الإلكتروني
                                            </span>
                                            @endif
                                    
                                            </span>
                                            <i class="fa fa-user"></i>
                                           
                                        <input style="padding-right: 30px;" id="email" type="email" class="form-control" name="email" class="login-items" placeholder="أدخل البريد الإلكتروني" value="{{ old('email') }}" required>

                                       
                                    
                                        </div>
                                        <!-- /.lost-item -->
                                        <div class="lost-item col-md-12 col-xs-12">
                                            <span>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <h6>هناك خطأ باكلمة المرور</h6>
                                            </span>
                                            @endif
                                            كلمة المرور</span>
                                            <i class="fa fa-lock"></i>
                                            <input style="padding-right: 30px;" id="password" type="password" class="form-control" class="login-items" placeholder ="كلمة المرور" name="password" value="{{ old('email') }}" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <!-- /.lost-item -->
                                        <div class="lost-item col-md-12 col-xs-12">
                                            <label class="pull-right">
                                                <input type="checkbox" name="remember">
                                                <h2>تذكر كلمة السر دائماً</h2>
                                            </label>
                                            <label class="pull-left">
                                                <a href="#" class="forget">هل نسيت كلمة المرور ؟</a>
                                            </label>
                                        </div>
                                        <!-- /.lost-item -->
                                        <div class="text-center confirm-item">
                                            <input type="submit" value="دخول">
                                        </div>
                                        <!-- /.lost-item -->
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <!-- end inner-right -->
                        </div>
                        <!-- end block -->
                        <div class="block col-md-6 col-xs-12 pull-left">
                            <div class="inner-left ">
                                <h1>
                                    <i class="fa fa-user-plus"></i>
                                    تسجيل عضوية جديدة
                                </h1>
                                <div class="lost-inner">
                                    
                                   {!! Form::open(['url'=>'/userreg']) !!}

                                        <div class="lost-item col-md-12 col-xs-12">
                                            <span>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <h6>الإسم مطلوب</h6>
                                                </span>
                                            @endif
                                            الإسم بالكامل
                                            </span>
                                            <i class="fa fa-user"></i>
                                            <input type="text" name ="name" placeholder="ادخل الإسم بالكامل" class="login-items" required>
                                        </div>

                                        <div class="lost-item col-md-12 col-xs-12">
                                            <span>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <h6>البريد الإلكتروني مستخدم من قبل</h6>
                                                </span>
                                            @endif
                                            البريد الالكتروني
                                            </span>
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" name ="email" placeholder="ادخل البريد الالكتروني" class="login-items" required>
                                        </div>
                                        <!-- /.lost-item -->
                                        <div class="lost-item col-md-12 col-xs-12">
                                            <span>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <h6>هناك خطأ بكلمة المرور</h6>
                                                </span>
                                            @endif
                                            كلمة المرور
                                            </span>
                                            <i class="fa fa-lock"></i>
                                            <input type="password" name="password" placeholder="ادخل كلمة المرور " class="login-items" required>
                                        </div>
                                        <!-- /.lost-item -->
                                        <div class="lost-item col-md-12 col-xs-12">
                                            <span>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <h6>هناك مشكلة بإعادة كلمة المرور</h6>
                                                </span>
                                            @endif

                                            إعادة كلمة المرور
                                            </span>
                                            <i class="fa fa-lock"></i>
                                            <input type="password" name="password_confirmation" placeholder="ادخل إعادة كلمة المرور " class="login-items" required>
                                        </div>
                                        <!-- /.lost-item -->
                                        <!--
                                        <div class="lost-item col-xs-12">
                                            <span>صورة الاعلان</span>
                                            <div class="fileUpload col-xs-12 text-center">
                                                <em><h5 class="fa fa-image"></h5> ارفق صورة للاعلان </em>
                                                <input type="file" class="upload">
                                            </div>
                                        </div>
-->
                                        <div class="lost-item col-md-12 col-xs-12">
                                            <label class="pull-right">
                                                <input type="checkbox" name="policy">
                                                <h2>
                                                 @if ($errors->has('policy'))
                                                <span class="help-block">
                                                    <h6>لابد من أن توافق علي الشروط و الأحكام الخاصة بموقعنا</h6>
                                                </span>
                                                 @endif

                                                أوافق علي جميع <a href="{{ url('policy') }}">الشروط والأحكام</a> لموقع الصفقة الرابحة اون لاين</h2>
                                            </label>
                                        </div>
                                        <!-- /.lost-item -->
                                        <div class="text-center confirm-item">
                                            <input type="submit" value="تسجيل عضوية">
                                        </div>
                                        <!-- /.lost-item -->
                                        {!! Form::close() !!}
                                        
                                    
                                </div>
                            </div>
                            <!-- end inner-left -->
                        </div>
                        <!-- end block -->
                    </div>
                    <!-- end login-forming -->
                </div>
                <!-- end container -->
            </div>
            <!-- end about-contetn -->
        </div>
        <!-- end about-box -->

@stop

