@extends('User.Layouts.usermaster')
@section('page-title')
Phone
@endsection
@section('content')

 <!-- navigation top -->
        <nav class="navigation scroll-bar hov-none">
            <div class="container ps-0 pe-0">
                <div class="nav-content">
                    <div class="nav-wrap bg-transparent-card pb-1 mb-2">
                        @foreach($category as $cate)
                        <div
                            class="nav-caption fw-600  text-grey-500 ps-2 font-xsss align-items-center d-flex">
                            <i class="font-xl text-current feather-inbox me-3"></i><span class="ms-auto pe-2">
                                {{$cate->category_name}}</span> 
                        </div>
                        @endforeach
                        <ul class="mb-1 top-content label-custom">
                            <li>
                                <div class="search-form-2 ms-auto">
                                    <i class="ti-search font-xss"></i>
                                    <input type="text"
                                        class="form-control text-grey--500 mb-0 bg-greylight theme-dark-bg border-0"
                                        placeholder="Search">
                                </div>
                            </li>
                          @foreach($subcate as $sub)
                            <li class="shadow-none"><a href="direct-by-farm-view.html" class="nav-content-bttn open-font">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox1"
                                            value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox1"><span> 
                                                {{$sub->subcategory_name}}</span></label>
                                    </div>
                                </a></li>
                           @endforeach
                           
                            
                            <li class="shadow-none">
                                <div class="accordion mb-0" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed p-2" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="text-grey-500 fw-600">BRANDS</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                     @foreach($brand as $bran)
                                                    <div class="form-check mt-1">
                                                        <input class="form-check-input" type="checkbox" id="blankCheckbox5"
                                                            value="option1" aria-label="">
                                                        <label class="text-grey-500 font-xssss" for="blankCheckbox5"><span class="text-grey-500 fw-600 font-xss">
                                                                {{$bran->brand_name}}</span></label>
                                                    </div>
                                                     @endforeach
                                                  
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navigation left -->
        
        <!-- navigation left -->
        <!-- main content -->
        <div class="main-content right-chat-active">
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left pe-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row ps-2 pe-1 mb-3">
                                <div class="col-lg-12 col-md-6 pe-2 ps-2">
                                    <select class="searchCat float-right sort shadow">
                                        <option value="">Default Sorting</option>
                                        <option value="151781441596 ">Owner</option>
                                        <option value="139119624252 ">Dealer</option>
                                        <option value="139118313532 ">Verify Tick</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row ps-2 pe-1">
                                <div class="col-lg-3 col-md-6 pe-2 ps-2">
                                    <div
                                        class="card p-1 bg-white w-100 hover-card border-0 shadow-xss rounded-xxl border-0 mb-3 overflow-hidden single-product">
                                        <div class="card-image w-100 product-image">
                                            <img src="https://via.placeholder.com/615x350.png" alt="image"
                                                class="w-100 img-fluid rounded-xxxl">
                                            <span class="new-tag">$ 1000</span>
                                            <div class="button">
                                                <a href="phone-view.html"
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 mt-4 border text-uppercase rounded-xxl ls-2 bg-transparent d-inline-block text-white me-1">View</a>
                                                <a href="phone-view.html"
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 float-right mt-4 text-uppercase rounded-xxl ls-2 alert-primary d-inline-block text-white me-1 model-popup-chat">Chat</a>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex px-2 pb-0 pt-2">
                                            <h2 class="fw-700 lh-3 font-xss mb-0">Rs 4000
                                            </h2>
                                        </div>
                                        <div class="card-body px-2 p-0 pb-2">
                                            <p class="memberlist font-xsss ms-0 d-inline-block mb-0">
                                                Used branded computer
                                            </p>
                                            <p
                                                class="font-xsssss fw-700 float-left  rounded-3 ls-2  d-inline-block  me-1 text-grey--500 mb-0">Sec 110 noida</p>
                                            <p
                                                class="font-xsssss fw-700 float-right text-uppercase rounded-3 ls-2 d-inline-block me-1 mb-0">Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 pe-2 ps-2">
                                    <div
                                        class="card p-1 bg-white w-100 hover-card border-0 shadow-xss rounded-xxl border-0 mb-3 overflow-hidden single-product">
                                        <div class="card-image w-100 product-image">
                                            <img src="https://via.placeholder.com/615x350.png" alt="image"
                                                class="w-100 img-fluid rounded-xxxl">
                                            <span class="new-tag">$ 1000</span>
                                            <div class="button">
                                                <a href="product-details.html"
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 mt-4 border text-uppercase rounded-xxl ls-2 bg-transparent d-inline-block text-white me-1">View</a>
                                                <a href="product-details.html"
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 float-right mt-4 text-uppercase rounded-xxl ls-2 alert-primary d-inline-block text-white me-1 model-popup-chat">Chat</a>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex px-2 pb-0 pt-2">
                                            <h2 class="fw-700 lh-3 font-xss mb-0">Rs 4000
                                            </h2>
                                        </div>
                                        <div class="card-body px-2 p-0 pb-2">
                                            <p class="memberlist font-xsss ms-0 d-inline-block mb-0">
                                                Used branded computer
                                            </p>
                                            <p
                                                class="font-xsssss fw-700 float-left  rounded-3 ls-2  d-inline-block  me-1 text-grey--500 mb-0">Sec 110 noida</p>
                                            <p
                                                class="font-xsssss fw-700 float-right text-uppercase rounded-3 ls-2 d-inline-block me-1 mb-0">Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 pe-2 ps-2">
                                    <div
                                        class="card p-1 bg-white w-100 hover-card border-0 shadow-xss rounded-xxl border-0 mb-3 overflow-hidden single-product">
                                        <div class="card-image w-100 product-image">
                                            <img src="https://via.placeholder.com/615x350.png" alt="image"
                                                class="w-100 img-fluid rounded-xxxl">
                                            <span class="new-tag">$ 1000</span>
                                            <div class="button">
                                                <a href="product-details.html"
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 mt-4 border text-uppercase rounded-xxl ls-2 bg-transparent d-inline-block text-white me-1">View</a>
                                                <a href="product-details.html"
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 float-right mt-4 text-uppercase rounded-xxl ls-2 alert-primary d-inline-block text-white me-1 model-popup-chat">Chat</a>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex px-2 pb-0 pt-2">
                                            <h2 class="fw-700 lh-3 font-xss mb-0">Rs 4000
                                            </h2>
                                        </div>
                                        <div class="card-body px-2 p-0 pb-2">
                                            <p class="memberlist font-xsss ms-0 d-inline-block mb-0">
                                                Used branded computer
                                            </p>
                                            <p
                                                class="font-xsssss fw-700 float-left  rounded-3 ls-2  d-inline-block  me-1 text-grey--500 mb-0">Sec 110 noida</p>
                                            <p
                                                class="font-xsssss fw-700 float-right text-uppercase rounded-3 ls-2 d-inline-block me-1 mb-0">Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 pe-2 ps-2">
                                    <div
                                        class="card p-1 bg-white w-100 hover-card border-0 shadow-xss rounded-xxl border-0 mb-3 overflow-hidden single-product">
                                        <div class="card-image w-100 product-image">
                                            <img src="https://via.placeholder.com/615x350.png" alt="image"
                                                class="w-100 img-fluid rounded-xxxl">
                                            <span class="new-tag">$ 1000</span>
                                            <div class="button">
                                                <a href="phone-view.html"
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 mt-4 border text-uppercase rounded-xxl ls-2 bg-transparent d-inline-block text-white me-1">View</a>
                                                <a href="product-details.html"
                                                    class="font-xsssss fw-700 ps-3 pe-3 lh-32 float-right mt-4 text-uppercase rounded-xxl ls-2 alert-primary d-inline-block text-white me-1 model-popup-chat">Chat</a>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex px-2 pb-0 pt-2">
                                            <h2 class="fw-700 lh-3 font-xss mb-0">Rs 4000
                                            </h2>
                                        </div>
                                        <div class="card-body px-2 p-0 pb-2">
                                            <p class="memberlist font-xsss ms-0 d-inline-block mb-0">
                                                Used branded computer
                                            </p>
                                            <p
                                                class="font-xsssss fw-700 float-left  rounded-3 ls-2  d-inline-block  me-1 text-grey--500 mb-0">Sec 110 noida</p>
                                            <p
                                                class="font-xsssss fw-700 float-right text-uppercase rounded-3 ls-2 d-inline-block me-1 mb-0">Today</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- main content -->


@endsection

