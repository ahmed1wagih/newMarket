@extends('front.layout')
@section('content')

 <div class="about-box col-xs-12">
            <div class="about-head col-xs-12 text-center">
                <h1>تهانينا</h1>
            </div>
            <!-- end about-head -->
            <div class="about-content col-xs-12">
                <div class="container">
                    <div class="about-img col-md-6 col-sm-6 col-xs-12">
                        <img src="images/about-img.jpg" alt="" class="img-responsive">
                    </div>
                    <!-- end about-img -->
                    <div class="about-data col-md-6 col-sm-6 col-xs-12 text-right">
                        <h1>تم التسجيل بنجاح</h1>
                        <p>الرجاء الذهاب لصفحة
                        <a href="{{ url('/login') }}" style="color: red">
                                تسجيل الدخول
                                
                        </a>
                        </p>
                       
                    </div>
                    <!-- end about-data -->
                </div>
                <!-- end container -->
            </div>
            <!-- end about-contetn -->
        </div>
        <!-- end about-box -->


@stop