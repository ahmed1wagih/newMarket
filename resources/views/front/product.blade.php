@extends('front.layout')
@section('content')



<div class="service-box col-xs-12">
            <div class="service-head col-xs-12 text-center">
                <h1>{{ $prods->name  }}</h1>
            </div>
           

            



           
            <!-- end service-head -->
            <div class="service-content service-one-con col-xs-12">
                <div class="container">
                    <div class="service-one col-xs-12">
                        <div class="service-one-img">
                            <div class="service-slider">
                            <img src="{{ asset('public/'.$prods->file) }}" alt="" class="img-responsive">
				            @foreach($prods->image as $img)
				            	<img src="{{ asset('public/'.$img->file) }}" alt="" class="img-responsive">
				            	
				            @endforeach
				           
                            </div>
                        </div>
                        <!-- end service-one-img -->
                        <div class="service-one-data">
                            <h1>{{ $prods->name }}
                                <span>{{ $prods->price }} جنيه مصري</span>
                            </h1>
                            <p>{{ $prods->text }}
                            </p>

                            <div class="row">
                                <div class="pro-data col-md-4 col-xs-12 pull-right">
                                    <ul>
                                        <li>
                                            <i class="fa fa-user"></i>
                                            <a href="profile.html">{{ $prods->user }}</a>
                                            <a href="#" class="send-msg">
                                                <i class="fa fa-envelope"></i> أرسل رسالة
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span>{{ $prods->address }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-clock-o"></i>
                                            <span>{{ $prods->updated_at }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <span>{{ $prods->phone }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end pro-data -->
                                <div class="pro-map col-md-7 col-xs-12 pull-left">
                                    <div id="googleMap" style="width:100%;height:280px;"></div>
                                </div>
                                <!-- end pro-map -->
                            </div>
                            <!-- end row -->
                            


                        </div>
                        <!-- end service-one-data -->
                    </div>
                    <!-- end service-one -->
                </div>
                <!-- end container -->
            </div>
            <!-- end service-contetn -->
            <div class="all-ads col-xs-12">
                <div class="container">
                    <div class="all-ads-head col-xs-12 text-center">
                        <h1>اعلانات اخري تابعه ل <span>{{ $prods->user }}</span></h1>
                    </div>


                    @php
                    	$relatives = DB::table('products')
					                ->where('user', 'like', $prods->user)
					              	->take(8)
					               	->get();

					               
					@endphp                
                     
                    @foreach($relatives as $relative)

                    	<div class="block col-md-3 col-sm-6 col-xs-12">
                        <div class="inner text-right">
                            <div class="inner-head">
                                <img src="images/avatar5.png" alt="">
                                <a href="{{ url('/profile/'.$relative->user) }}">{{ $relative->user }}</a>
                                <span>{{ $relative->price }} جنيه مصري</span>
                            </div>
                            <!-- end inner-head -->
                            <div class="inner-img">
                                <img src="{{ asset('public/'.$relative->file) }}" alt="" style="width:264px; height:176px;" class="img-responsive">
                            </div>
                            <!-- end inner-img -->
                            <div class="inner-data">
                                <a href="{{ url('/product/'.$relative->id) }}">{{ $relative->name }}</a>
                                <p>{{ $relative->text }}
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



                    @endforeach
                    
                    
        

@endsection