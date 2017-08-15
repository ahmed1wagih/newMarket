@extends('front.layout')
@section('content')

{{-- {{  dd($id)}} --}}

@php 
$user = Auth::user();


@endphp

<div class="order-box col-xs-12">
            <div class="order-head col-xs-12 text-center">
                <h1>تعديل بيانات العضو</h1>
            </div>
            <!-- end service-head -->
            <div class="order-content  col-xs-12">
                <div class="container">
                    <div class="order-form col-md-6 col-xs-12 text-right">
                        
                        {!! Form::open(['method'=>'post', 'files'=>true, 'url'=>'/userupdate/'.$user->id]) !!}
                      
                            <div class="order-item col-xs-12">
                                <h1>
                                	 @if ($errors->has('name'))
                                            <span class="help-block">
                                                <h6>هناك خطأ بالإسم</h6>
                                            </span>
                                      @endif
                                      الإسم بالكامل
                                </h1>
                                <input type="text" name="name" value=" {{ $user->name }}" placeholder="اسم هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                                	 @if ($errors->has('email'))
                                            <span class="help-block">
                                                <h6>هناك خطأ باالبريد الإلكتروني</h6>                                            
                                            </span>
                                     @endif
                                	البريد الإلكتروني		
                                </h1>
                                <input type="text" name="email" value="{{ $user->email }}" placeholder="البريد الإلكتروني هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                                	@if ($errors->has('phone'))
                                            <span class="help-block">
                                                <h6>هناك خطأ بالموبايل</h6>
                                            </span>
                                    @endif
                                    الموبايل
                                    </h1>
                                <input type="text" name="phone" value="{{ $user->phone }}" placeholder="الموبايل هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                              		  @if ($errors->has('address'))
                                            <span class="help-block">
                                                <h6>هناك خطأ بالعنوان</h6>
                                            </span>
                                      @endif
			                       العنوان التفصيلي
                                </h1>
                                <input type="text" name="address" value="{{ $user->address }}" placeholder="العنوان هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                               		  @if ($errors->has('oldpass'))
                                            <span class="help-block">
                                                <h6>هناك خطأ بالإسم</h6>
                                            </span>
                                      @endif
                                      كلمة المرور القديمة
                                </h1>
                                <input type="password" name="oldpass" value="" placeholder="كلمة المرور القديمة هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                                	  @if ($errors->has('password'))
                                            <span class="help-block">
                                                <h6>هناك خطأ بكلمة المرور الجديدة</h6>
                                            </span>
                                      @endif
                                      كلمة المرور الجديدة
                                </h1>
                                <input type="password" name="password" placeholder="كلمة المرور الجديدة هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                                	@if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <h6>هناك خطأ بإعادة كلمة المرور الجديدة</h6>
                                            </span>
                                      @endif
                                      أعد  ادخال كلمة المرور الجديدة
                                </h1>
                                <input type="password" name="password_confirmation" placeholder="إعادة كلمة المرور الجديدة هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                                	@if ($errors->has('file'))
                                            <span class="help-block">
                                                <h6>هناك خطأ بالصورة</h6>
                                            </span>
                                      @endif
                                      الصورة الشخصية
                                </h1>
                                <div class="fileUpload col-xs-12 text-right">
                                    <span><i class="fa fa-image"></i> ارفق صورة شخصية </span>

                                    <input type="file" name="file" class="upload">
                                </div>
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12 text-right">
                                <input type="submit" value="حفظ التعديلات">
                            </div>
                            <!-- end order-item -->
                        {!! Form::close() !!}
                    </div>
                    <!-- end order-form -->
                </div>
                <!-- end container -->
            </div>
            <!-- end order-contetn -->
        </div>
        <!-- end order-box -->
        


  


@stop