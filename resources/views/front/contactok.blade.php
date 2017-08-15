@extends('front.layout')
@section('content')

<div class="contact-box col-xs-12">
            <div class="contact-head col-xs-12 text-center">
                <h1>إتصــل بنــا</h1>
            </div>
            <!-- end contact-head -->
            <div class="contact-content  col-xs-12">
                <div class="container">
                    <div class="contact-data col-md-6 col-xs-12 text-right">
                        <div class="contact-data-inner">
                            <div class="C_data-item">
                                <h1>
                                    <i class="fa fa-map-marker"></i>
                                    العنوان
                                </h1>
                                <p>هنا تكتب تفاصيل العنوان</p>
                            </div>
                            <!-- end C_data-item -->
                            <div class="C_data-item">
                                <h1>
                                    <i class="fa fa-phone"></i>
                                    الموبايل
                                </h1>
                                <p>+01204421484152</p>
                            </div>
                            <!-- end C_data-item -->
                            <div class="C_data-item">
                                <h1>
                                    <i class="fa fa-envelope"></i>
                                    البريد الالكتروني
                                </h1>
                                <p>abc@aaa.com</p>
                            </div>
                            <!-- end C_data-item -->

                        </div>
                        <!-- end contact-data-inner -->
                    </div>
                    <!-- end contact-data -->
                    <div class="contact-form col-md-6 col-xs-12 text-right">
                        
                        
                        <h1>تم إرسال الطلب</h1>
                         <a href="{{ url('/') }}">
                                     الرئيسية
                        </a>
                        
                        <!-- end contact-form-inner -->
                    </div>
                    <!-- end contact-form -->
                </div>
                <!-- end container -->
                <!-- Google Map -->
                
            </div>
            <!-- end contact-contetn -->
        </div>
        <!-- end contact-box -->


        @section('script')

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
    {{-- {!! Html::script('public/js/script.js') !!}
     --}}

    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
   
    <script type="text/javascript">
        var position = [41.5959739, 12.32423269999997];

        // function initialize() {
        //     $(".map-section").click(function () {
        //         $(this).toggleClass("js-active");
        //         $(this).find(".mt-open").toggle();
        //         $(this).find(".mt-close").toggle();
        //     });
        //     var myOptions = {
        //         zoom: 8,
        //         streetViewControl: true,
        //         scaleControl: true,
        //         mapTypeId: google.maps.MapTypeId.TERRAIN
        //     };
        //     map = new google.maps.Map(document.getElementById('contact-map'),
        //         myOptions);
        //     latLng = new google.maps.LatLng(position[0], position[1]);
        //     map.setCenter(latLng);
        //     marker = new google.maps.Marker({
        //         position: latLng,
        //         map: map,
        //         draggable: false,
        //         animation: google.maps.Animation.DROP
        //     });
        // }
        // google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
        @stop

@stop