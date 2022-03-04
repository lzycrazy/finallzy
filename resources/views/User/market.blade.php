@extends('User.Layouts.usermaster')
@section('page-title')
Market
@endsection
@section('content')

       
        <!-- navigation left -->
        <nav class="navigation scroll-bar market-scrollbar">
            <div class="container ps-0 pe-0">
                <div class="nav-content">
                    <div class="nav-wrap bg-transparent-card pt-3 pb-1 mb-2 mt-2">
                        <div class="nav-caption fw-600 font-xssss text-grey-500 ps-2">Categories</div>
                        <ul class="mb-1 top-content">
                            <li>
                                <div class="search-form-2 ms-auto">
                                    <i class="ti-search font-xss"></i>
                                    <input type="text"
                                        class="form-control text-grey--500 mb-0 bg-greylight theme-dark-bg border-0"
                                        placeholder="Search">
                                </div>
                            </li>
                            @foreach($category as $cate)
                            <li class="" data_prodect_cat_id="11">
                                <a href='{{ url("phone/{$cate->id}") }}' class="dddaada">
                                       <img src="{{asset('')}}/{{$cate->category_icon}}" class="icon-img  icn" alt="Icon Image">
                                           {{$cate->category_name}}					
                                </a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navigation left -->
           <!-- main content -->
        <div class="main-content right-chat-active">
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left pe-0">
                    <div class="row">
                         @foreach($marketads as $market)
                        <div class="col-xl-12">
                           
                            <div class="row ps-2 pe-1">
                                <div class="col-lg-12 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                    <div
                                        class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                        <span
                                            class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                            <a href="default-hotel-details.html">Featured</a></span>
                                        <div class="card-image w-100" style="height: 300px;">
                                            <a href="default-hotel-details.html" class="position-relative d-block"><img
                                                    src="{{asset('')}}/{{$market->banner}}"  alt="image"
                                                    class="w-100"></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row ps-2 pe-1">

                                <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                    <div
                                        class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                        <span
                                            class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                            <a href="default-hotel-details.html">Featured</a></span>
                                        <div class="card-image w-100">
                                            <a href="default-hotel-details.html" class="position-relative d-block"><img
                                                    src="{{asset('')}}/{{$market->image}}" alt="image"
                                                    class="w-100 img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                              <!--   <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                    <div
                                        class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                        <span
                                            class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                            <a href="default-hotel-details.html">Featured</a></span>
                                        <div class="card-image w-100">
                                            <a href="default-hotel-details.html" class="position-relative d-block"><img
                                                    src="https://via.placeholder.com/615x350.png" alt="image"
                                                    class="w-100 img-fluid"></a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                    <div
                                        class="card w-100 p-0 hover-card border-0 rounded-3 overflow-hidden me-1 bg-transparent">
                                        <span
                                            class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                            <a href="default-hotel-details.html">Featured</a></span>
                                        <div class="card-image w-100">
                                           
                                                <video  height="270"  autoplay muted loop playsinline preload="metadata" >
                                          <source src="{{asset('upload/adsvedio')}}/{{$market['video']}}" type="video/mp4">
                                        </video>
                                         
                                        </div>
                                    </div>
                                </div>
                            <!--     <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                    <div
                                        class="card w-100 p-0 hover-card border-0 rounded-3 overflow-hidden me-1 bg-transparent">
                                        <span
                                            class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1">
                                            <a href="default-hotel-details.html">Featured</a></span>
                                        <div class="card-image w-100">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item w-100 h-300"
                                                    src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div> 
        <!-- main content -->











@endsection