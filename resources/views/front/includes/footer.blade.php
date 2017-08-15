<section class="footer col-xs-12">
            <div class="footer-top col-xs-12">
                <div class="container">
                    <div class="footer-item col-md-4 col-xs-12 text-right">
                        <h1>{{ $footersettings[0]->ar_name }}</h1>
                        <p>{{ $footersettings[0]->ar_text }}</p>
                    </div>
                    <!-- end footer-item -->
                    <div class="footer-item col-md-4 col-xs-12 text-right">
                        <h1>{{ $footersettings[1]->ar_text }}</h1>
                        <ul>
                            <li>
                                <i class="fa fa-angle-left"></i>
                                <a href="{{ url('/') }}">الرئيسية</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                                <a href="{{ url('/allads') }}">خدماتنا</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                                <a href="{{ url('/about') }}">من نحن</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                                <a href="{{ url('/newad') }}">طلب جديد</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                                <a href="{{ url('/contact') }}">اتصل بنا</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                                <a href="{{ url('/policy') }}">الشروط والأحكام</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                    <div class="footer-item contacting col-md-4 col-xs-12 text-right">
                        <h1>{{ $footersettings[2]->ar_text }}</h1>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <h2>{{ $footersettings[3]->ar_name }}</h2>
                            </li>
                            <li>
                                <span>{{ $footersettings[3]->ar_text }}</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <h2>{{ $footersettings[4]->ar_text }}</h2>
                            </li>
                            <li>
                                <span>{{ $footersettings[4]->ar_name }}</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h2>{{ $footersettings[5]->ar_text }}</h2>
                            </li>
                            <li>
                                <span>{{ $footersettings[5]->ar_name }}</span>
                            </li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end container -->
            </div>
            <!-- end footer-top -->
            <div class="footer-bottom col-xs-12">
                <div class="container">
                    <div class="copyright col-md-6 col-xs-12">
                        <p>{{ $footersettings[6]->ar_text }}</p>
                    </div>
                    <!-- end copyright -->
                    <div class="social col-md-6 col-xs-12">
                        <ul>
                            <li class="facebook">
                                <a href="{{ url('$socialsettings[1]->ar_text') }}"></a>
                            </li>

                            <li class="twitter">
                                <a href="{{ url('$socialsettings[0]->ar_text') }}"></a>
                            </li>

                            <li class="instagram">
                                <a href="{{ url('$socialsettings[2]->ar_text') }}"></a>
                            </li>
                            <li class="google">
                                <a href="{{ url('$socialsettings[3]->ar_text') }}"></a>
                            </li>
                            <li class="youtube">
                                <a href="{{ url('$socialsettings[4]->ar_text') }}"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end social -->
                </div>
                <!-- end container -->
            </div>
            <!-- end footer-top -->
        </section>
        <!-- end footer -->
    </div>
    <!-- end wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- /.toTop -->

    <!-- Java SCript Files -->
    {!! Html::script('public/js/jquery-2.2.2.min.js') !!}
    {!! Html::script('public/js/bootstrap.min.js') !!}
    {!! Html::script('public/js/jquery-smoothscroll.js') !!}
    {!! Html::script('public/js/materialize.min.js') !!}
    {!! Html::script('public/js/modernizr.min.js') !!}
    {!! Html::script('public/js/owl.carousel.min.js') !!}
    {!! Html::script('public/js/wow.min.js') !!}
    {!! Html::script('public/js/script.js') !!}


    
    
    
    
    
    @yield('script')
</body>

</html>