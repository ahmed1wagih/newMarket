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
                        <div class="contact-form-inner">
                        {!! Form::open(['url'=>'contactsend']) !!}
                            
                                <div class="contact-form-item col-md-6 col-xs-12 text-right">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" placeholder="اكتب اسمك بالكامل">
                                </div>
                                <!-- end contact-form-item -->
                                <div class="contact-form-item col-md-6 col-xs-12 text-right">
                                    <i class="fa fa-envelope"></i>
                                    <input type="email" name="email" placeholder="اكتب بريدك الالكتروني">
                                </div>
                                <!-- end contact-form-item -->
                                <div class="contact-form-item col-md-6 col-xs-12 text-right">
                                    <i class="fa fa-map-marker"></i>
                                    <input type="text" name="adress" placeholder="اكتب عنوانك بالكامل">
                                </div>
                                <!-- end contact-form-item -->
                                <div class="contact-form-item col-md-6 col-xs-12 text-right">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" name="phone" placeholder="اكتب رقم هاتفك">
                                </div>
                                <!-- end contact-form-item -->
                                <div class="contact-form-item col-md-12 col-xs-12 text-right">
                                    <i class="fa fa-comment-o"></i>
                                    <textarea name="message" placeholder="اكتب رسالتك هنا"></textarea>
                                </div>
                                <!-- end contact-form-item -->
                                <div class="contact-form-item col-md-12 col-xs-12 text-right">
                                    <input type="submit" value="إرسال">
                                </div>
                                <!-- end contact-form-item -->
                            {!! Form::close() !!}
                        </div>
                        <!-- end contact-form-inner -->
                    </div>
                    <!-- end contact-form -->
                </div>
                <!-- end container -->
                <!-- Google Map -->
                <div class="google-map">

                    <div id="contact-map"></div>

                    <div class="map-section">

                        <div class="map-toggle">
                            <div class="mt-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="mt-text font-alt">
                                <div class="mt-open">Open the map <i class="fa fa-angle-down"></i></div>
                                <div class="mt-close">Close the map <i class="fa fa-angle-up"></i></div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End Google Map -->
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