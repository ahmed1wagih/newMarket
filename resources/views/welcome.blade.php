@extends('front.layout')

@section('loading')

     <!-- start the loading screen -->
 <div class="wrap">
        <div class="loading">
            <img src="{{ asset('public/images/load.gif') }}" alt="">
        </div>
    </div>

    <!-- end the loading screen -->

    <div class="wrapper col-xs-12">
        <section class="home">
            <div class="parallax">
                <div class="home-caption col-xs-12 text-center">
                    <div class="container">
                        <h1>بادر بتسجيل حساب لدي الصفقة الرابحة اون لاين لتستطيع الحصول علي منتجاتنا</h1>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end home-caption -->
                <img src="{{ asset('public/images/home-bj1.jpg') }}" alt="home-bj" class="img-responsive">
            </div>
            <!-- end parallax -->
        </section>
        <!-- end home -->

@stop

@section('slider')

<section class="main-slider col-xs-12">
            <div class="slider-box text-center">
                <div class="slider-item">
                    <div class="slider-item-caption text-right">
                        <a href="product.html">
                            <i class="fa fa-cart-plus"></i> مثال لاسم المنتج المعروض للبيع من هنا
                        </a>
                    </div>
                    <img src="{{ asset('public/images/slide1.jpg') }}" alt="slide" class="img-responsive">
                </div>
                <!-- end slider-item -->
                <div class="slider-item">
                    <div class="slider-item-caption text-right">
                        <a href="product.html">
                            <i class="fa fa-cart-plus"></i> مثال لاسم المنتج المعروض للبيع من هنا
                        </a>
                    </div>
                    
                    <img src="{{ asset('public/images/slide2.jpg') }}" alt="slide" class="img-responsive">
                </div>
                <!-- end slider-item -->
                <div class="slider-item">
                    <div class="slider-item-caption text-right">
                        <a href="product.html">
                            <i class="fa fa-cart-plus"></i> مثال لاسم المنتج المعروض للبيع من هنا
                        </a>
                    </div>
                    <img src="{{ asset('public/images/slide3.jpg') }}" alt="slide" class="img-responsive">
                </div>
                <!-- end slider-item -->
                <div class="slider-item">
                    <div class="slider-item-caption text-right">
                        <a href="product.html">
                            <i class="fa fa-cart-plus"></i> مثال لاسم المنتج المعروض للبيع من هنا
                        </a>
                    </div>
                    <img src="{{ asset('public/images/slide4.jpg') }}" alt="slide" class="img-responsive">
                </div>
                <!-- end slider-item -->
                <div class="slider-item">
                    <div class="slider-item-caption text-right">
                        <a href="product.html">
                            <i class="fa fa-cart-plus"></i> مثال لاسم المنتج المعروض للبيع من هنا
                        </a>
                    </div>
                    <img src="{{ asset('public/images/slide5.jpg') }}" alt="slide" class="img-responsive">
                </div>
                <!-- end slider-item -->
            </div>
            <!-- end slider-box -->
        </section>
        <!-- end main-slider -->

@stop

@section('content')

    
        <div class="freee-ads col-xs-12">
            <div class="container">
                <a href="#" title="مساحة اعلانية">
                    <img src="images/banner.jpg" alt="" class="img-responsive">
                </a>
            </div>
            <!-- end container -->
        </div>
        <!-- end free-ads -->

        <div class="tiles col-xs-12">
            <div class="container">
            @foreach($cats as $cat)
                <div class="block col-md-3 col-sm-6 col-xs-12">
                    <div class="{{ $cat->color }}">
                        <div class="inner-img">
                            <img src="{{ asset('public/'.$cat->file) }}" alt="" style="height: 120px; width: 120px;">
                        </div>
                        <!-- end inner-img -->
                        <div class="inner-name">
                            <a href="ads.html">{{ $cat->name }}</a>
                        </div>
                        <!-- end inner-name -->
                        <div class="inner-desc">
                            <p>{{ $cat->text }}</p>
                        </div>
                        <!-- end inner-desc -->
                    </div>
                    <!-- end inner -->
                </div>
                @endforeach
                
                <!-- end block -->
            </div>
            <!-- end container -->
        </div>
        <!-- end tiles -->

        <div class="main-desc col-xs-12">
            <div class="container">
                <div class="description col-md-8 col-xs-12 pull-right text-right">
                    <h1>{{ $homesettings[0]->name }}</h1>
                    <p>{{ $homesettings[0]->ar_text }}</p>
                </div>
                <!-- end description -->
                <div class="desc-ads col-md-4 col-xs-12 pull-left text-center">
                    <a href="#" title="مساحة اعلانية">
                        <img src="images/free-ads2.jpg" alt="" class="img-responsive"> </a>
                </div>
                <!-- end desc-ads -->
            </div>
            <!-- end container -->
        </div>

       
        <div class="all-ads col-xs-12">
            <div class="container">
                <div class="all-ads-head col-xs-12 text-center">
                    <h1>أحدث الاعلانات المعروضة</h1>
                </div>
                <!-- end all-ads-head -->
            @foreach($products as $product)
                <div class="block col-md-3 col-sm-6 col-xs-12">
                    <div class="inner text-right">
                        <div class="inner-head">
                            <img src="{{ asset('public/images/avatar5.png') }}" alt="">
                            <a href="{{ url('/profile/'.$product->user) }}">{{ $product->user }}</a>
                            <span>{{ $product->price }} ج.م</span>
                        </div>
                        <!-- end inner-head -->
                        <div class="inner-img">
                            <img src="{{ asset('public/'.$product->file) }}" alt="" style="width:264px; height:176px;" class="img-responsive">
                        </div>
                        <!-- end inner-img -->
                        <div class="inner-data">
                            <a href="product.html">{{ $product->name }}</a>
                            <p>{{ $product->text }}
                            </p>
                            <div class="inner-rate">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half-o"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                            </div>
                            <!-- end inner-rate -->
                        </div>
                        <!-- end inner-data -->
                    </div>
                    <!-- end inner -->
                </div>
                <!-- end block -->
            @endforeach    
            <!-- end container -->
            <div class="slider-more col-xs-12 text-center">
                <div class="container">
                    <a href="ads.html">رؤية المزيد من الإعلانات
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
                <!-- end container -->
            </div>
            <!-- end slider-more -->
        </div>
        <!-- end all-ads -->




@stop
