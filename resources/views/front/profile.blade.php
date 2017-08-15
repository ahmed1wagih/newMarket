@extends('front.layout')
@section('content')

@php $user=Auth::user() @endphp

{{-- @if($user->name == $name->user) --}}
 <div class="about-box col-xs-12">
            <div class="about-head col-xs-12 text-center">
                <h1>حسابي</h1>
            </div>
            <!-- end about-head -->
            <div class="about-content profile-content col-xs-12">
                <div class="container">
                    <div class="profile-box col-xs-12">

                        <div class="prof1 col-xs-12">
                            <div class="prof-left col-md-4 col-xs-12 pull-left">
                                <div class="prof-img col-xs-12">
                                {!! Html::image('/public/'.$user->file,' ',['class'=>'img-responsive']) !!}
                                
                                </div>
                                <!-- end prof-img -->
                                <div class="prof-msg col-xs-12 text-center">
                                    <a href="#" class="send-msg">
                                        ارسل رسالة
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                                <!-- end prof-msg -->
                            </div>
                            <!-- end prof-left -->
                            

                            <div class="prof-data col-md-8 col-xs-12 pull-right text-right">
                                <div class="prof-edit col-xs-12 text-left">
                                    <a href="{{ url('/usersettings/'.$user->id) }}" class="edit-prof">
                                تعديل معلومات الحساب
                                <i class="fa fa-cog"></i>
                            </a>
                                    <a href="{{ url('/newad') }}" class="edit-prof">
                                اضف اعلان جديد
                                <i class="fa fa-plus"></i>
                            </a>
                                    <a href="" class="edit-prof">
                                اضف اعلان مبوب
                                <i class="fa fa-plus"></i>
                            </a>
                                </div>
                                <!-- end prof-edit -->
                           {{--  @endif     --}}


                                <div class="prof-item col-md-6 col-xs-12">
                                    <h2>
                                        <b> <i class="fa fa-user"></i> الاسم :</b>
                                        <span>{{ $user->name }}</span>
                                    </h2>
                                </div>
                                <!-- end prof-item -->
                                <div class="prof-item col-md-6 col-xs-12">
                                    <h2>
                                        <b><i class="fa fa-envelope"></i> الايميل : </b>
                                        <span>{{ $user->email }}</span>
                                    </h2>
                                </div>
                                <!-- end prof-item -->
                                <div class="prof-item col-md-6 col-xs-12">
                                    <h2>
                                        <b><i class="fa fa-mobile"></i> الموبايل : </b>
                                        <span>{{ $user->phone }}</span>
                                    </h2>
                                </div>
                                <!-- end prof-item -->
                                <div class="prof-item col-md-6 col-xs-12">
                                    <h2>
                                        <b><i class="fa fa-map-marker"></i> العنوان : </b>
                                        <span>{{ $user->address }}</span>
                                    </h2>
                                </div>
                                <!-- end prof-item -->
                                <div class="prof-item col-md-12 col-xs-12">
                                    <div id="googleMap" style="width:100%;height:280px;"></div>
                                </div>
                                <!-- end prof-item -->
                            </div>
                            <!-- end prof-data -->
                        </div>
                        <!-- end prof1-->
                        <div class="all-ads prof-ads col-xs-12">

                            <div class="all-ads-head prof-ads col-xs-12 text-right">
                                <h1>اعلانات تابعة ل أمير ناجح</h1>
                            </div>
                            <!-- end all-ads-head -->
                            <div class="block col-md-3 col-sm-6 col-xs-12">
                                <div class="inner text-right">
                                    <div class="inner-admin">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="تعديل الاعلان" class="edit-admin-ad">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="حذف الاعلان" class="del-admin-ad">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </div>
                                    <!-- end inner-admin -->
                                    <div class="inner-head">
                                        <img src="{{ asset('public/images/avatar5.png') }}" alt="">
                                        <a href="#">أمير ناجح</a>
                                        <span>250 ج.م</span>
                                    </div>
                                    <!-- end inner-head -->
                                    <div class="inner-img">
                                        <img src="{{ asset('public/images/slide1.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                    <!-- end inner-img -->
                                    <div class="inner-data">
                                        <a href="#">مثال لمنتج ما</a>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
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
                            <div class="block col-md-3 col-sm-6 col-xs-12">
                                <div class="inner text-right">
                                    <div class="inner-admin">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="تعديل الاعلان" class="edit-admin-ad">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="حذف الاعلان" class="del-admin-ad">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </div>
                                    <!-- end inner-admin -->
                                    <div class="inner-head">
                                        <img src="{{ asset('public/images/avatar5.png') }}" alt="">
                                        <a href="#">أمير ناجح</a><span>250 ج.م</span>
                                    </div>
                                    <!-- end inner-head -->
                                    <div class="inner-img">
                                        <img src="{{ asset('public/images/slide2.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                    <!-- end inner-img -->
                                    <div class="inner-data">
                                        <a href="#">مثال لمنتج ما</a>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
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
                            <div class="block col-md-3 col-sm-6 col-xs-12">
                                <div class="inner text-right">
                                    <div class="inner-admin">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="تعديل الاعلان" class="edit-admin-ad">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="حذف الاعلان" class="del-admin-ad">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </div>
                                    <!-- end inner-admin -->
                                    <div class="inner-head">
                                        <img src="{{ asset('public/images/avatar5.png') }}" alt="">
                                        <a href="#">أمير ناجح</a><span>250 ج.م</span>
                                    </div>
                                    <!-- end inner-head -->
                                    <div class="inner-img">
                                        <img src="{{ asset('public/images/slide3.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                    <!-- end inner-img -->
                                    <div class="inner-data">
                                        <a href="#">مثال لمنتج ما</a>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
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
                            <div class="block col-md-3 col-sm-6 col-xs-12">
                                <div class="inner text-right">
                                    <div class="inner-admin">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="تعديل الاعلان" class="edit-admin-ad">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="حذف الاعلان" class="del-admin-ad">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </div>
                                    <!-- end inner-admin -->
                                    <div class="inner-head">
                                        <img src="{{ asset('public/images/avatar5.png') }}" alt="">
                                        <a href="#">أمير ناجح</a><span>250 ج.م</span>
                                    </div>
                                    <!-- end inner-head -->
                                    <div class="inner-img">
                                        <img src="{{ asset('public/images/slide4.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                    <!-- end inner-img -->
                                    <div class="inner-data">
                                        <a href="#">مثال لمنتج ما</a>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
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

                            <div class="slider-more col-xs-12 text-center">

                                <a href="#">رؤية المزيد من الإعلانات
                        <i class="fa fa-eye"></i>
                    </a>

                            </div>
                            <!-- end slider-more -->
                        </div>
                        <!-- end all-ads -->
                    </div>
                    <!-- end profile-box -->
                </div>
                <!-- end container -->
            </div>
            <!-- end about-contetn -->
        </div>
        <!-- end about-box -->

@stop