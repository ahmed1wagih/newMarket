@extends('front.layout')
@section('content')

	 <div class="about-box col-xs-12">
            <div class="about-head col-xs-12 text-center">
                <h1>جميع المنتجات</h1>
            </div>
            <!-- end about-head -->
            <div class="about-content col-xs-12">
                <!-- page section -->

                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 mb-md-60">
                                <!-- gray shop panel -->
                                <div class='relative mb-30 bg-section-gray products-panel'>
                                    <div class="clearfix relative">
                                        <div class="right">
                                            <p class='mb-0 product-show-info'>عرض 1-6 منتجات من 230 من عدد المنتجات الكلية</p>
                                        </div>
                                        <!-- grid-list switcher -->
                                        <div class="left shop-view" id="shop-view">
                                            <a class="grid-view active" title="Switch to grid view">
                                                <i class="fa fa-th-large"></i>
                                            </a>
                                            <a class="list-view" title="Switch to list view">
                                                <i class="fa fa-list"></i>
                                            </a>
                                        </div>
                                        <!-- End grid-list switcher -->
                                        <!-- shop item sorting -->
                                        <div class='left'>
                                            <form method="post" action="#" class="form product-sorting">
                                                <select class="shop-select">
                                                    <option>قيمة افتراضية</option>
                                                    <option>أقل ل أعلي</option>
                                                    <option>أعلي ل أقل</option>
                                                </select>
                                            </form>
                                        </div>
                                        <!-- End shop item sorting -->
                                    </div>
                                </div>
                                <!-- End gray shop panel -->
                                <div class="row multi-columns-row shop-columns shop products">
                                    <!-- shop item container -->
                                    <div class="col-sm-4 col-lg-3 mb-50 mb-xss-30 product">
                                        <!-- product image -->
                                        <div class="product-img">
                                            <div class='product-special font-alt'>تم بيعه !</div>
                                            <div class='pic'>
                                                <img src="images/shop/img-1.jpg" alt>
                                            </div>
                                            <div class='product-hover'>
                                                <!-- product button container -->
                                                <div class='product-button-cont'>
                                                    <div class='add-to-cart'><a href="product.html" class="button button-small button-shadow">مشاهدة الاعلان</a></div>
                                                </div>
                                                <!-- End product button container -->
                                            </div>
                                        </div>
                                        <!-- End product image -->
                                        <div class="product-descr">
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-title font-alt">
                                                <a href="#">اسم منتج ما</a>
                                            </div>
                                            <div class="product-price ">
                                                $15.00<del>$25.00</del>
                                            </div>
                                            <p class="text">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص</p>
                                            <div class='product-button-cont'>
                                                <div class='add-to-cart'><a href="product.html" class="button button-small button-border alt">مشاهدة الاعلان</a></div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End shop item container -->
                                    <!-- shop item container -->
                                    <div class="col-sm-4 col-lg-3 mb-50 mb-xss-30 product">
                                        <!-- product image -->
                                        <div class="product-img">
                                            <div class='pic'>
                                                <img src="images/shop/img-2.jpg" alt>
                                            </div>
                                            <div class='product-hover'>
                                                <!-- product button container -->
                                                <div class='product-button-cont'>
                                                    <div class='add-to-cart'><a href="product.html" class="button button-small button-shadow">مشاهدة الاعلان</a></div>
                                                </div>
                                                <!-- End product button container -->
                                            </div>
                                        </div>
                                        <!-- End product image -->
                                        <div class="product-descr">
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-title font-alt">
                                                <a href="#">اسم منتج ما</a>
                                            </div>
                                            <div class="product-price ">
                                                $49.00
                                            </div>
                                            <p class="text">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص</p>
                                            <div class='product-button-cont'>
                                                <div class='add-to-cart'><a href="product.html" class="button button-small button-border alt">مشاهدة الاعلان</a></div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End shop item container -->
                                    <!-- shop item container -->
                                    <div class="col-sm-4 col-lg-3 mb-50 mb-xss-30 product">
                                        <!-- product image -->
                                        <div class="product-img">
                                            <div class='pic'>
                                                <img src="images/shop/img-3.jpg" alt>
                                            </div>
                                            <div class='product-hover'>
                                                <!-- product button container -->
                                                <div class='product-button-cont'>
                                                    <div class='add-to-cart'><a href="product.html" class="button button-small button-shadow">مشاهدة الاعلان</a></div>
                                                </div>
                                                <!-- End product button container -->
                                            </div>
                                        </div>
                                        <!-- End product image -->
                                        <div class="product-descr">
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-title font-alt">
                                                <a href="#">اسم منتج ما</a>
                                            </div>
                                            <div class="product-price ">
                                                $100.00
                                            </div>
                                            <p class="text">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص</p>
                                            <div class='product-button-cont'>
                                                <div class='add-to-cart'><a href="product.html" class="button button-small button-border alt">مشاهدة الاعلان</a></div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End shop item container -->
                                    <!-- shop item container -->
                                    <div class="col-sm-4 col-lg-3 mb-50 mb-xss-30 product">
                                        <!-- product image -->
                                        <div class="product-img">
                                            <div class='pic'>
                                                <img src="images/shop/img-4.jpg" alt>
                                            </div>
                                            <div class='product-hover'>
                                                <!-- product button container -->
                                                <div class='product-button-cont'>
                                                    <div class='add-to-cart'><a href="product.html" class="button button-small button-shadow">مشاهدة الاعلان</a></div>
                                                </div>
                                                <!-- End product button container -->
                                            </div>
                                        </div>
                                        <!-- End product image -->
                                        <div class="product-descr">
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-title font-alt">
                                                <a href="#">اسم منتج ما</a>
                                            </div>
                                            <div class="product-price ">
                                                $59.00
                                            </div>
                                            <p class="text">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص</p>
                                            <div class='product-button-cont'>
                                                <div class='add-to-cart'><a href="product.html" class="button button-small button-border alt">مشاهدة الاعلان</a></div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End shop item container -->
                                    <!-- shop item container -->
                                    <div class="col-sm-4 col-lg-3 mb-50 mb-xss-30 product">
                                        <!-- product image -->
                                        <div class="product-img">
                                            <div class='pic'>
                                                <img src="images/shop/img-5.jpg" alt>
                                            </div>
                                            <div class='product-hover'>
                                                <!-- product button container -->
                                                <div class='product-button-cont'>
                                                    <div class='add-to-cart'><a href="product.html" class="button button-small button-shadow">مشاهدة الاعلان</a></div>
                                                </div>
                                                <!-- End product button container -->
                                            </div>
                                        </div>
                                        <!-- End product image -->
                                        <div class="product-descr">
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-title font-alt">
                                                <a href="#">اسم منتج ما</a>
                                            </div>
                                            <div class="product-price ">
                                                $140.00<del>$155.00</del>
                                            </div>
                                            <p class="text">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص</p>
                                            <div class='product-button-cont'>
                                                <div class='add-to-cart'><a href="product.html" class="button button-small button-border alt">مشاهدة الاعلان</a></div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End shop item container -->
                                    <!-- shop item container -->
                                    <div class="col-sm-4 col-lg-3 mb-50 mb-xss-30 product">
                                        <!-- product image -->
                                        <div class="product-img">
                                            <div class='pic'>
                                                <img src="images/shop/img-6.jpg" alt>
                                            </div>
                                            <div class='product-hover'>
                                                <!-- product button container -->
                                                <div class='product-button-cont'>
                                                    <div class='add-to-cart'><a href="product.html" class="button button-small button-shadow">مشاهدة الاعلان</a></div>
                                                </div>
                                                <!-- End product button container -->
                                            </div>
                                        </div>
                                        <!-- End product image -->
                                        <div class="product-descr">
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-title font-alt">
                                                <a href="#">اسم منتج ما</a>
                                            </div>
                                            <div class="product-price ">
                                                $159.00
                                            </div>
                                            <p class="text">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص</p>
                                            <div class='product-button-cont'>
                                                <div class='add-to-cart'><a href="product.html" class="button button-small button-border alt">مشاهدة الاعلان</a></div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End shop item container -->
                                </div>

                                <div class="pagination mb-20 mt-20">
                                    <a href="#" class="nav-prev font-alt left">
                                        <div class="icon-part"><i class="fa fa-long-arrow-left"></i></div>
                                        <div class="word-part">
                                            <div class="wrapper"><span>السابق</span></div>
                                        </div>
                                    </a>
                                    <!--
							--><a href="#" class="active">1</a>
                                    <!--
							--><a href="#">2</a>
                                    <!--
							--><a href="#">3</a>
                                    <!--
							--><a href="#">4</a>
                                    <!--
							-->
                                    <a href="#" class="nav-next font-alt right">
                                        <div class="word-part">
                                            <div class="wrapper"><span>التالي</span></div>
                                        </div>
                                        <div class="icon-part"><i class="fa fa-long-arrow-right"></i></div>
                                    </a>
                                </div>

                            </div>
                            <div class="col-md-3 sidebar">
                                <!-- widget search -->

                                <aside class="widget-search">
                                    <form method="get" class="form" action="#">
                                        <label>
                                            <input type="search" placeholder="Type and Hit Enter ..." value="" title="Search for:">
                                            <span class="search-submit">
											<i class="fa fa-search"></i>
										</span>
                                        </label>
                                        <button type="submit" class="search-submit"><i class="flaticon-tool"></i></button>
                                    </form>
                                </aside>

                                <!-- /widget search -->
                                <!-- widget categories -->

                                <aside class="widget-categories">
                                    <h3 class="font-alt">الأقسام<span class='featured_separated color-alt'><span></span></span></h3>
                                    <ul>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 45 ) </span></a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 13 ) </span></a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 21 ) </span></a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 7 ) </span></a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 19 ) </span></a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 30 ) </span></a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 6 ) </span></a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 16 ) </span></a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">قسم ما<span> ( 9 ) </span></a>
                                        </li>
                                    </ul>
                                </aside>

                                <!-- /widget categories -->

                                <!-- widget price filter -->

                                <aside class="widget">
                                    <h3 class="font-alt">فصل بالسعر<span class='featured_separated color-alt'><span></span></span></h3>
                                    <form method="get" action="#">
                                        <div class="price_slider_wrapper">
                                            <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                                <a class="ui-slider-handle ui-state-default ui-corner-all" href="#"><span class="from"></span></a>
                                                <a class="ui-slider-handle ui-state-default ui-corner-all" href="#"><span class="to"></span></a>
                                            </div>
                                            <div class="price_slider_amount">
                                                <input type="text" id="min_price" name="min_price" value="" data-min="5" placeholder="Min price">
                                                <input type="text" id="max_price" name="max_price" value="" data-max="500" placeholder="Max price">
                                                <div class="price_label">
                                                    في حدود : <span class="from"></span><span> - </span><span class="to"></span>
                                                </div>
                                                <input type="hidden" name="post_type" value="product">
                                            </div>
                                            <div><a href="#" class="button button-small button-shadow">فصل</a></div>
                                        </div>
                                    </form>
                                </aside>

                                <!-- widget price filter -->

                                <!-- widget product list -->

                                <aside class="widget">
                                    <h3 class="font-alt">المنتجات<span class='featured_separated color-alt'><span></span></span></h3>
                                    <div class="widget-body">
                                        <ul class="clearlist widget-posts shop-widget">
                                            <!-- widget product list item -->
                                            <li class="clearfix">
                                                <a href="#">
                                                    <img alt src="images/shop/widget-img-1.jpg" class="widget-posts-img right">
                                                </a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" class="item-title font-alt">اسم منتج ما</a>
                                                    <a href="#" title="">
                                                        <div class='stars'>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </a>
                                                    <div class='product-price'><span>$32.00</span></div>
                                                </div>
                                            </li>
                                            <!-- end widget product list item -->
                                            <!-- widget product list item -->
                                            <li class="clearfix">
                                                <a href="#">
                                                    <img alt src="images/shop/widget-img-2.jpg" class="widget-posts-img right">
                                                </a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" class="item-title font-alt">اسم منتج ما</a>
                                                    <a href="#" title="">
                                                        <div class='stars'>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </a>
                                                    <div class='product-price'><span>$15.00</span></div>
                                                </div>
                                            </li>
                                            <!-- end widget product list item -->
                                            <!-- widget product list item -->
                                            <li class="clearfix">
                                                <a href="#">
                                                    <img alt src="images/shop/widget-img-3.jpg" class="widget-posts-img right">
                                                </a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" class="item-title font-alt">اسم منتج ما</a>
                                                    <a href="#" title="">
                                                        <div class='stars'>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </a>
                                                    <div class='product-price'><span>$25.00</span></div>
                                                </div>
                                            </li>
                                            <!-- end widget product list item -->
                                        </ul>
                                    </div>
                                </aside>

                                <!-- End widget product list -->

                                <!-- widget tag -->

                                <aside class="widget-tag">
                                    <h3 class="font-alt">الكلماات المفتاحية<span class='featured_separated color-alt'><span></span></span></h3>
                                    <div class="tag-cloud">
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                        <a href="#" rel="tag">كلمة ما</a>
                                    </div>
                                </aside>

                                <!-- /widget tag -->

                            </div>
                        </div>
                    </div>
                </section>

                <!-- /page section -->
            </div>
            <!-- end about-contetn -->
        </div>
        <!-- end about-box -->


@stop