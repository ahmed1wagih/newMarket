@extends('front.layout')
@section('content')

@php

    $user = Auth::user();

@endphp
 <div class="order-box col-xs-12">
            <div class="order-head col-xs-12 text-center">
                <h1>إضافة إعلان جديد</h1>
            </div>
            <!-- end service-head -->
            <div class="order-content  col-xs-12">
                <div class="container">
                    <div class="order-form col-md-6 col-xs-12 text-right">
                         {!! Form::open(['url'=>'/newadins','method'=>'post', 'files'=>true ]) !!}
                            <div class="order-item col-xs-12">
                                <h1>اسم الإعلان</h1>
                                <input type="text" name="name" placeholder="اسم الاعلان هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                                    نوع الاعلان
                                </h1>
                                <div>
                                    <label>
                                        <input type="radio" value="0" name="type">
                                        <b>معروض</b>
                                    </label>
                                    <label>
                                        <input type="radio" value="1" name="type">
                                        <b>مطلوب</b>
                                    </label>
                                </div>
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>تحديد نوع الاعلان </h1>
                                <select name="cat_id">
                                @foreach($cats as $cat)
                               
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                   
                                @endforeach
                                </select>
                                
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>وصف الاعلان</h1>
                                <textarea name="text" placeholder="اكتب الوصف هنا"></textarea>
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>
                                    سعر الاعلان
                                </h1>
                                <div>
                                    <label>
                                        <input type="radio" value="1" name="price" id="paied">
                                        <b>مدفوع</b>
                                    </label>
                                    <label>
                                        <input type="radio" value="0" name="price" id="freee">
                                        <b>مجاني</b>
                                    </label>
                                </div>
                                <!--
                                <div class="paied-det col-xs-12">
                                    
                                    <a href="#">
                                        الدفع بواسطة البايبال
                                        <i class="fa fa-paypal"></i>
                                    </a>

                                    <input type="text" placeholder="من فضلك اكتب السعر">
                                </div>
                                 end paied-det 
-->
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>اسم المعلن</h1>
                                <input type="text" name="user" value="{{ $user->name }}" placeholder="اسم المعلن هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>البريد الالكتروني للمعلن</h1>
                                <input type="email" name="email" value="{{ $user->email }}" placeholder="ايميل المعلن هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>رقم هاتف المعلن</h1>
                                <input type="text" name="phone" value="{{ $user->phone }}" placeholder="رقم هاتف المعلن هنا">
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <div class="fileUpload col-xs-12 text-right">
                                    <span><i class="fa fa-image"></i> ارفق صورة للاعلان </span>
                                    <input type="file" name="file" class="upload">
                                </div>
                            </div>
                            <div class="order-item col-xs-12">
                                <div class="fileUpload col-xs-12 text-right">
                                    <span><i class="fa fa-image"></i> صور اخرى للمنتج </span>
                                    <input type="file" name="otherImages[]" class="upload" multiple>
                                </div>
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>حدد الدولة</h1>
                                <select>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                </select>
                            </div>
                            <!-- end order-item -->
                            <div class="order-item col-xs-12">
                                <h1>حدد المدينة</h1>
                                <select>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                    <option>madina1</option>
                                </select>
                            </div>
                            <!-- end order-item -->
                           
                            <div class="order-item col-xs-12 text-right">
                                <input type="submit" value="إرسال" {{-- class="confirm" --}}>
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