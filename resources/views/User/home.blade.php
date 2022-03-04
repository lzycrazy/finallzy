@extends('User.Layouts.usermaster')
@section('page-title')
Home
@endsection
@section('content')
@include('User.Layouts.navigation')
      

 <!-- main content -->
        <div class="main-content right-chat-active">

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <!-- loader wrapper -->
                    <div class="preloader-wrap p-3">
                        <div class="box shimmer">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                        <div class="box shimmer mb-3">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                        <div class="box shimmer">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                    </div>
                    <!-- loader wrapper -->
                    <div class="row feed-body">
                        <div class="col-xl-6 col-xxl-9 col-lg-8">
                            <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                                <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                                    <div class="item">
                                        <div
                                            class="card w125 h150 d-block border-0 shadow-none rounded-xxxl bg-dark overflow-hidden mb-3 mt-3">
                                            <div
                                                class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#storiesmodal">
                                                    <span class="btn-round-lg bg-white"><i
                                                            class="feather-plus font-lg"></i></span>
                                                    <div class="clearfix"></div>
                                                    <h4
                                                        class="fw-700 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                        Add Story </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card w125 h150 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3"
                                            style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            <div
                                                class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#" data-target="#Modalstries" data-toggle="modal">
                                                    <figure
                                                        class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                        <img src="images/ash.png" alt="image"
                                                            class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                    </figure>
                                                    <div class="clearfix"></div>
                                                    <h4
                                                        class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                        Victor Exrixon </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card w125 h150 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3"
                                            style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            <div
                                                class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#" data-target="#Modalstries" data-toggle="modal">
                                                    <figure
                                                        class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                            class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                    </figure>
                                                    <div class="clearfix"></div>
                                                    <h4
                                                        class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                        Surfiya Zakir </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card w125 h150 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3"
                                            style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            <div
                                                class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#" data-target="#Modalstries" data-toggle="modal">
                                                    <figure
                                                        class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                            class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                    </figure>
                                                    <div class="clearfix"></div>
                                                    <h4
                                                        class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                        David Goria </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card w125 h150 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3"
                                            style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            <div
                                                class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#" data-target="#Modalstries" data-toggle="modal">
                                                    <figure
                                                        class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                            class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                    </figure>
                                                    <div class="clearfix"></div>
                                                    <h4
                                                        class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                        David Goria </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card w125 h150 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3"
                                            style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            <div
                                                class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#" data-target="#Modalstries" data-toggle="modal">
                                                    <figure
                                                        class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                            class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                    </figure>
                                                    <div class="clearfix"></div>
                                                    <h4
                                                        class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                        David Goria </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card w125 h150 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden mb-3 mt-3"
                                            style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            <div
                                                class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                                <a href="#" data-target="#Modalstries" data-toggle="modal">
                                                    <figure
                                                        class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                        <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                            class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                    </figure>
                                                    <div class="clearfix"></div>
                                                    <h4
                                                        class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                        Seary Victor </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3">
                                <div class="card-body p-0">
                                    <a href="#"
                                        class=" font-xssss fw-600 text-grey-500 card-body p-0 d-flex align-items-center"><i
                                            class="btn-round-sm font-xs text-primary feather-edit-3 me-2 bg-greylight"></i>Create
                                        Post</a>
                                </div>
                                <div class="card-body p-0 mt-3 position-relative">
                                    <div class="row">
                                        <div class="col-md-1 pl-0">
                                            <figure class="avatar position-absolute mt-1 top-5"><img
                                                    src="https://via.placeholder.com/50x50.png" alt="image"
                                                    class="shadow-sm rounded-circle w30"></figure>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="user-page.html" class="nav-content-bttn open-font ms-auto"
                                                data-bs-toggle="modal" data-bs-target="#postmodal"><textarea
                                                    name="message" data-toggle="modal" data-target="#exampleModal"
                                                    class="h30 bor-0 w-100 rounded-xxl p-2  font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg"
                                                    cols="30" rows="1"
                                                    placeholder="What's going on? #Hashtag.. @Mention.. Link.."></textarea></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex p-0 mt-0 shadow-br">
                                    <a href="#"
                                        class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pr-4 pl-0 upload-image-btn position-relative">
                                        <i class="font-md text-success feather-image me-2"><input type="file"
                                                id="publisher-photos" accept="image/x-png, image/gif, image/jpeg"
                                                name="postPhotos[]" multiple="multiple"></i>
                                        <span class="d-none-xs">Photo/Video</span></a>
                                        <a href="default-storie.html" class="p-2 text-center ms-0 menu-icon center-menu-icon">
											<i class="fab fa-adversal text-grey-500 me-3 font-lg"></i>
                                        </a>
                                    <div class="dropdown-menu dropdown-menu-start p-4 rounded-xxl border-0 shadow-lg"
                                        aria-labelledby="dropdownMenu4">
                                        <div class="card-body p-0 d-flex">
                                            <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this
                                                    to your saved items</span></h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span></h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span>
                                            </h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-3 pb-1">
                                <div class="card-body p-0 d-flex">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Surfiya Zakir <span
                                            class="d-block font-xssss fw-500 mt-0 lh-3 text-grey-500">3 hour ago</span>
                                    </h4>
                                    <a href="#" class="ms-auto" id="dropdownMenu2" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i
                                            class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg"
                                        aria-labelledby="dropdownMenu2">
                                        <div class="card-body p-0 d-flex">
                                            <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this
                                                    to your saved items</span></h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span></h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span>
                                            </h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex p-0">
                                    <p class=" post-comment-text">Lorem ipsum dolor
                                        sit amet,
                                        consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat
                                        non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus
                                    </p>
                                    <a href="#"
                                        class="text-primary ms-2 d-block font-xssss fw-500 mt-0 lh-3 text-grey-500 pt-4">See
                                        more</a>
                                </div>

                                <div class="card-body d-block p-0">
                                    <div class="row ps-2 pe-2">
                                        <div class="col-xs-4 col-sm-4 p-1"><a
                                                href="https://via.placeholder.com/1200x800.png"
                                                data-lightbox="roadtrip"><img
                                                    src="https://via.placeholder.com/1200x800.png"
                                                    class="rounded-3 w-100" alt="image"></a></div>
                                        <div class="col-xs-4 col-sm-4 p-1"><a
                                                href="https://via.placeholder.com/1200x800.png"
                                                data-lightbox="roadtrip"><img
                                                    src="https://via.placeholder.com/1200x800.png"
                                                    class="rounded-3 w-100" alt="image"></a></div>
                                        <div class="col-xs-4 col-sm-4 p-1"><a
                                                href="https://via.placeholder.com/1200x800.png" data-lightbox="roadtrip"
                                                class="position-relative d-block"><img
                                                    src="https://via.placeholder.com/1200x800.png"
                                                    class="rounded-3 w-100" alt="image"><span
                                                    class="img-count font-sm text-white ls-3 fw-600"><b>+2</b></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex p-0 mt-3 justify-content-between">
                                    <a href="#"
                                        class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                            class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>2.8K
                                        Like</a>
                                    <div class="emoji-wrap">
                                        <ul class="emojis list-inline mb-0">
                                            <li class="emoji list-inline-item"><i class="em em---1"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-angry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-anguished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-astonished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-blush"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-clap"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-cry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-full_moon_with_face"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button href="#"
                                        class="d-flex bg-transparent border-0 align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"
                                        onclick="myFunction()"><i
                                            class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span
                                            class="d-none-xss">22 Comment</span></button>
                                    <a href="#" id="dropdownMenu21" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                            class="d-none-xs">Share</span></a>
                                    <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg"
                                        aria-labelledby="dropdownMenu21">
                                        <h4 class="fw-700 font-xss text-grey-900 d-flex align-items-center">Share <i
                                                class="feather-x ms-auto font-xssss btn-round-xs bg-greylight text-grey-900 me-2"></i>
                                        </h4>
                                        <div class="card-body p-0 d-flex">
                                            <ul class="d-flex align-items-center justify-content-between mt-2">
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-facebook"><i
                                                            class="font-xs ti-facebook text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-twiiter"><i
                                                            class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-linkedin"><i
                                                            class="font-xs ti-linkedin text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-instagram"><i
                                                            class="font-xs ti-instagram text-white"></i></a></li>
                                                <li><a href="#" class="btn-round-lg bg-pinterest"><i
                                                            class="font-xs ti-pinterest text-white"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body p-0 d-flex">
                                            <ul class="d-flex align-items-center justify-content-between mt-2">
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-tumblr"><i
                                                            class="font-xs ti-tumblr text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-youtube"><i
                                                            class="font-xs ti-youtube text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-flicker"><i
                                                            class="font-xs ti-flickr text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-black"><i
                                                            class="font-xs ti-vimeo-alt text-white"></i></a></li>
                                                <li><a href="#" class="btn-round-lg bg-whatsup"><i
                                                            class="font-xs feather-phone text-white"></i></a></li>
                                            </ul>
                                        </div>

                                        <h4 class="fw-700 font-xssss mt-4 text-grey-500 d-flex align-items-center mb-3">
                                            Copy Link</h4>
                                        <i
                                            class="feather-copy position-absolute right-35 mt-3 font-xs text-grey-500"></i>
                                        <input type="text" value="https://socia.be/1rGxjoJKVF0"
                                            class="bg-grey text-grey-500 font-xssss border-0 lh-32 p-2 font-xssss fw-600 rounded-3 w-100 theme-dark-bg">
                                    </div>
                                </div>
                                <div class="card-body p-0 mt-1" id="comment-box" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-2 col-2 col-lg-1 px-2">
                                            <figure>
                                                <a href="default.html" class="nav-content-bttn open-font"><img
                                                        src="images/profile-4.png" alt="user" class="w40 mt-2"></a>
                                            </figure>
                                        </div>
                                        <div class="col-md-8 col-8 col-lg-9 pe-0">
                                            <form class="post-comt-box mt-2" method="post">
                                                <input type="text" placeholder="Write a comment..."
                                                    class="form-control rounded-xl bg-greylight border-0 font-xssss fw-500 ps-3 w-100">
                                            </form>
                                        </div>
                                        <div class="col-md-2 col-2 col-lg-2 pl-1">
                                            <a href="#"
                                                class=" font-xssss fw-600 text-grey-500 card-body p-0 d-flex align-items-right mt-2 pt-1 ms-auto"><i
                                                    class="btn-round-sm font-xs text-primary feather-send text-white me-2 bg-current"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-0">
                                <div class="card-body p-0 d-flex">
                                    <figure class="avatar me-3 m-0"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Goria Coast <span
                                            class="d-block font-xssss fw-500 mt-0 lh-3 text-grey-500">2 hour ago</span>
                                    </h4>
                                    <a href="#" class="ms-auto" id="dropdownMenu6" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i
                                            class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg"
                                        aria-labelledby="dropdownMenu6">
                                        <div class="card-body p-0 d-flex">
                                            <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this
                                                    to your saved items</span></h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span></h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span>
                                            </h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 me-lg-5">
                                    <p class=" post-comment-text">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat
                                        non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus
                                        <a href="#" class="fw-600 text-primary ms-2">See more</a>
                                    </p>
                                </div>
                                <div class="card-body d-flex p-0">
                                    <a href="#"
                                        class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                            class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                        <i
                                            class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K
                                        Like</a>
                                    <div class="emoji-wrap">
                                        <ul class="emojis list-inline mb-0">
                                            <li class="emoji list-inline-item"><i class="em em---1"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-angry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-anguished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-astonished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-blush"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-clap"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-cry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-full_moon_with_face"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#"
                                        class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span
                                            class="d-none-xss">22 Comment</span></a>
                                    <a href="#" id="dropdownMenu31" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                            class="d-none-xs">Share</span></a>
                                    <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg"
                                        aria-labelledby="dropdownMenu31">
                                        <h4 class="fw-700 font-xss text-grey-900 d-flex align-items-center">Share <i
                                                class="feather-x ms-auto font-xssss btn-round-xs bg-greylight text-grey-900 me-2"></i>
                                        </h4>
                                        <div class="card-body p-0 d-flex">
                                            <ul class="d-flex align-items-center justify-content-between mt-2">
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-facebook"><i
                                                            class="font-xs ti-facebook text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-twiiter"><i
                                                            class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-linkedin"><i
                                                            class="font-xs ti-linkedin text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-instagram"><i
                                                            class="font-xs ti-instagram text-white"></i></a></li>
                                                <li><a href="#" class="btn-round-lg bg-pinterest"><i
                                                            class="font-xs ti-pinterest text-white"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body p-0 d-flex">
                                            <ul class="d-flex align-items-center justify-content-between mt-2">
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-tumblr"><i
                                                            class="font-xs ti-tumblr text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-youtube"><i
                                                            class="font-xs ti-youtube text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-flicker"><i
                                                            class="font-xs ti-flickr text-white"></i></a></li>
                                                <li class="me-1"><a href="#" class="btn-round-lg bg-black"><i
                                                            class="font-xs ti-vimeo-alt text-white"></i></a></li>
                                                <li><a href="#" class="btn-round-lg bg-whatsup"><i
                                                            class="font-xs feather-phone text-white"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="fw-700 font-xssss mt-4 text-grey-500 d-flex align-items-center mb-3">
                                            Copy Link</h4>
                                        <i
                                            class="feather-copy position-absolute right-35 mt-3 font-xs text-grey-500"></i>
                                        <input type="text" value="https://socia.be/1rGxjoJKVF0"
                                            class="bg-grey text-grey-500 font-xssss border-0 lh-32 p-2 font-xssss fw-600 rounded-3 w-100 theme-dark-bg">
                                    </div>
                                </div>
                            </div>

                            <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                                <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                                    <div class="item">
                                        <div
                                            class="card w200 h150 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                                style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            </div>
                                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-1 bg-white rounded-circle w-100">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mb-1">Seary Victor </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div
                                            class="card w200 h150 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                                style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            </div>
                                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-1 bg-white rounded-circle w-100">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mt-2 mb-1">Seary Victor </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div
                                            class="card w200 h150 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                                style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            </div>
                                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-1 bg-white rounded-circle w-100">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mt-2 mb-1">John Steere </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div
                                            class="card w200 h150 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                                style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            </div>
                                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-1 bg-white rounded-circle w-100">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mt-2 mb-1">Mohannad Zitoun </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div
                                            class="card w200 h150 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                                style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            </div>
                                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-1 bg-white rounded-circle w-100">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mt-2 mb-1">Studio Express </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div
                                            class="card w200 h150 d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                                style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            </div>
                                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-1 bg-white rounded-circle w-100">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mt-2 mb-1">Hendrix Stamp </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div
                                            class="card w200 h150  d-block border-0 shadow-xss rounded-xxl overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body position-relative h100 bg-image-cover bg-image-center"
                                                style="background-image: url(https://via.placeholder.com/200x300.png);">
                                            </div>
                                            <div class="card-body d-block w-100 ps-4 pe-4 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 mt--6 position-relative w75 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-1 bg-white rounded-circle w-100">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xsss mt-2 mb-1">Mohannad Zitoun </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-3">
                                <div class="card-body p-0 d-flex">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Anthony Daugloi <span
                                            class="d-block font-xssss fw-500 mt-0 lh-3 text-grey-500">2 hour ago</span>
                                    </h4>
                                    <a href="#" class="ms-auto" id="dropdownMenu5" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i
                                            class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                                    <div class="dropdown-menu dropdown-menu-start p-4 rounded-xxl border-0 shadow-lg"
                                        aria-labelledby="dropdownMenu5">
                                        <div class="card-body p-0 d-flex">
                                            <i class="feather-bookmark text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this
                                                    to your saved items</span></h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-alert-circle text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span
                                                    class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span></h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-alert-octagon text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span>
                                            </h4>
                                        </div>
                                        <div class="card-body p-0 d-flex mt-2">
                                            <i class="feather-lock text-grey-500 me-3 font-lg"></i>
                                            <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group
                                                <span class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to
                                                    your saved items</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                                    <a href="#" class="video-btn">
                                        <img src="https://via.placeholder.com/615x350.png" alt="">
                                    </a>
                                </div>
                                <div class="card-body p-0 me-lg-5">
                                    <p class=" post-comment-text mb-2">Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non,
                                        feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed
                                        rhoncus <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
                                </div>
                                <div class="card-body d-flex p-0">
                                    <a href="#"
                                        class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                            class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                        <i
                                            class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K
                                        Like</a>
                                    <div class="emoji-wrap">
                                        <ul class="emojis list-inline mb-0">
                                            <li class="emoji list-inline-item"><i class="em em---1"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-angry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-anguished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-astonished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-blush"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-clap"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-cry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-full_moon_with_face"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#"
                                        class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span
                                            class="d-none-xss">22 Comment</span></a>
                                    <a href="#"
                                        class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                            class="d-none-xs">Share</span></a>
                                </div>
                            </div>

                            <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-0">
                                <div class="card-body p-0 d-flex">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Anthony Daugloi <span
                                            class="d-block font-xssss fw-500 mt-0 lh-3 text-grey-500">2 hour ago</span>
                                    </h4>
                                    <a href="#" class="ms-auto"><i
                                            class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                                </div>

                                <div class="card-body p-0 me-lg-5">
                                    <p class=" post-comment-text">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat
                                        non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus
                                        <a href="#" class="fw-600 text-primary ms-2">See more</a>
                                    </p>
                                </div>
                                <div class="card-body d-block p-0 mb-3">
                                    <div class="row ps-2 pe-2">
                                        <div class="col-xs-6 col-sm-6 p-1"><a
                                                href="https://via.placeholder.com/300x200.png"
                                                data-lightbox="roadtri"><img
                                                    src="https://via.placeholder.com/300x200.png"
                                                    class="rounded-3 w-100" alt="image"></a></div>
                                        <div class="col-xs-6 col-sm-6 p-1"><a
                                                href="https://via.placeholder.com/300x200.png"
                                                data-lightbox="roadtri"><img
                                                    src="https://via.placeholder.com/300x200.png"
                                                    class="rounded-3 w-100" alt="image"></a></div>
                                    </div>
                                    <div class="row ps-2 pe-2">
                                        <div class="col-xs-4 col-sm-4 p-1"><a
                                                href="https://via.placeholder.com/300x200.png"
                                                data-lightbox="roadtri"><img
                                                    src="https://via.placeholder.com/300x200.png"
                                                    class="rounded-3 w-100" alt="image"></a></div>
                                        <div class="col-xs-4 col-sm-4 p-1"><a
                                                href="https://via.placeholder.com/300x200.png"
                                                data-lightbox="roadtri"><img
                                                    src="https://via.placeholder.com/300x200.png"
                                                    class="rounded-3 w-100" alt="image"></a></div>
                                        <div class="col-xs-4 col-sm-4 p-1"><a
                                                href="https://via.placeholder.com/300x200.png" data-lightbox="roadtri"
                                                class="position-relative d-block"><img
                                                    src="https://via.placeholder.com/300x200.png"
                                                    class="rounded-3 w-100" alt="image"><span
                                                    class="img-count font-sm text-white ls-3 fw-600"><b>+2</b></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex p-0">
                                    <a href="#"
                                        class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                            class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                        <i
                                            class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K
                                        Like</a>
                                    <div class="emoji-wrap">
                                        <ul class="emojis list-inline mb-0">
                                            <li class="emoji list-inline-item"><i class="em em---1"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-angry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-anguished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-astonished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-blush"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-clap"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-cry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-full_moon_with_face"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#"
                                        class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span
                                            class="d-none-xss">22 Comment</span></a>
                                    <a href="#"
                                        class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                            class="d-none-xs">Share</span></a>
                                </div>
                            </div>

                            <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                                <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                                    <div class="item">
                                        <div
                                            class="card w150 d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body d-block w-100 ps-3 pe-3 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 position-relative w65 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xssss mt-3 mb-1">Richard Bowers </h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-3">@macale343</p>
                                                <a href="#"
                                                    class="text-center p-2 lh-20 w100 ms-1 ls-3 d-inline-block rounded-xl bg-success font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div
                                            class="card w150 d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body d-block w-100 ps-3 pe-3 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 position-relative w65 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xssss mt-3 mb-1">David Goria </h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-3">@macale343</p>
                                                <a href="#"
                                                    class="text-center p-2 lh-20 w100 ms-1 ls-3 d-inline-block rounded-xl bg-success font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div
                                            class="card w150 d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body d-block w-100 ps-3 pe-3 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 position-relative w65 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xssss mt-3 mb-1">Vincent Parks </h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-3">@macale343</p>
                                                <a href="#"
                                                    class="text-center p-2 lh-20 w100 ms-1 ls-3 d-inline-block rounded-xl bg-success font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div
                                            class="card w150 d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body d-block w-100 ps-3 pe-3 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 position-relative w65 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xssss mt-3 mb-1">Studio Express </h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-3">@macale343</p>
                                                <a href="#"
                                                    class="text-center p-2 lh-20 w100 ms-1 ls-3 d-inline-block rounded-xl bg-success font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div
                                            class="card w150 d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3 me-2 mt-3">
                                            <div class="card-body d-block w-100 ps-3 pe-3 pb-4 text-center">
                                                <figure
                                                    class="avatar ms-auto me-auto mb-0 position-relative w65 z-index-1">
                                                    <img src="https://via.placeholder.com/50x50.png" alt="image"
                                                        class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                                </figure>
                                                <div class="clearfix"></div>
                                                <h4 class="fw-700 font-xssss mt-3 mb-1">Aliqa Macale </h4>
                                                <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-3">@macale343</p>
                                                <a href="#"
                                                    class="text-center p-2 lh-20 w100 ms-1 ls-3 d-inline-block rounded-xl bg-success font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-3">
                                <div class="card-body p-0 d-flex">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Anthony Daugloi <span
                                            class="d-block font-xssss fw-500 mt-0 lh-3 text-grey-500">2 hour ago</span>
                                    </h4>
                                    <a href="#" class="ms-auto"><i
                                            class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                                </div>
                                <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                                    <a href="#" class="video-btn">
                                        <img src="https://via.placeholder.com/615x350.png" alt="">
                                    </a>
                                </div>
                                <div class="card-body p-0 me-lg-5">
                                    <p class=" post-comment-text mb-2">Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non,
                                        feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed
                                        rhoncus <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
                                </div>
                                <div class="card-body d-flex p-0">
                                    <a href="#"
                                        class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                            class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                        <i
                                            class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K
                                        Like</a>
                                    <div class="emoji-wrap">
                                        <ul class="emojis list-inline mb-0">
                                            <li class="emoji list-inline-item"><i class="em em---1"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-angry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-anguished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-astonished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-blush"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-clap"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-cry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-full_moon_with_face"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#"
                                        class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span
                                            class="d-none-xss">22 Comment</span></a>
                                    <a href="#"
                                        class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                            class="d-none-xs">Share</span></a>
                                </div>
                            </div>

                            <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-0">
                                <div class="card-body p-0 d-flex">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Anthony Daugloi <span
                                            class="d-block font-xssss fw-500 mt-0 lh-3 text-grey-500">2 hour ago</span>
                                    </h4>
                                    <a href="#" class="ms-auto"><i
                                            class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss"></i></a>
                                </div>
                                <div class="card-body p-0 me-lg-5">
                                    <p class=" post-comment-text mb-2">Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non,
                                        feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed
                                        rhoncus <a href="#" class="fw-600 text-primary ms-2">See more</a></p>
                                </div>
                                <div class="card-body d-block p-0 mb-3">
                                    <div class="row ps-2 pe-2">
                                        <div class="col-sm-12 p-1"><a href="https://via.placeholder.com/615x350.png"
                                                data-lightbox="roadtr"><img
                                                    src="https://via.placeholder.com/615x350.png"
                                                    class="rounded-3 w-100" alt="image"></a></div>
                                    </div>
                                </div>
                                <div class="card-body d-flex p-0">
                                    <a href="#"
                                        class="emoji-bttn d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2"><i
                                            class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                        <i
                                            class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K
                                        Like</a>
                                    <div class="emoji-wrap">
                                        <ul class="emojis list-inline mb-0">
                                            <li class="emoji list-inline-item"><i class="em em---1"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-angry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-anguished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-astonished"></i> </li>
                                            <li class="emoji list-inline-item"><i class="em em-blush"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-clap"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-cry"></i></li>
                                            <li class="emoji list-inline-item"><i class="em em-full_moon_with_face"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#"
                                        class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i><span
                                            class="d-none-xss">22 Comment</span></a>
                                    <a href="#"
                                        class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                            class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                            class="d-none-xs">Share</span></a>
                                </div>
                            </div>


                            <div class="card w-100 text-center shadow-xss rounded-xxl border-0 p-4 mb-3 mt-3">
                                <div class="snippet mt-2 ms-auto me-auto" data-title=".dot-typing">
                                    <div class="stage">
                                        <div class="dot-typing"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="ccol-xl-3 col-xxl-3 col-lg-4 ps-md-0 right-chat nav-wrap mt-2 right-scroll-bar invite-hide"
                            style="right: 255px;">
                            <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 custom-shadow">
                                <div class="card-body d-flex align-items-center p-4">
                                    <h4 class="fw-700 mb-0 font-xssss text-grey-900">People you may know</h4>
                                    <a href="#" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                                </div>
                                <div class="card-body d-flex pt-2 ps-2 pe-2 pb-0 border-top-xs bor-0">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Mohannad Zitoun <span
                                            class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500"><a href="#"
                                                class="p-1 px-3 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Follow</a></span>
                                    </h4>
                                </div>

                                <div class="card-body d-flex pt-2 ps-2 pe-2 pb-0">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Mohannad Zitoun <span
                                            class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500"><a href="#"
                                                class="p-1 px-3 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Follow</a></span>
                                    </h4>
                                </div>

                                <div class="card-body d-flex pt-2 ps-2 pe-2 pb-0">
                                    <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png"
                                            alt="image" class="shadow-sm rounded-circle w45"></figure>
                                    <h4 class="fw-700 text-grey-900 font-xss mt-1">Mohannad Zitoun <span
                                            class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500"><a href="#"
                                                class="p-1 px-3 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Follow</a></span>
                                    </h4>
                                </div>
                            </div>
                            <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                                <div class="card-body d-flex align-items-center p-6 mb-3">
                                    <h4 class="fw-700 mb-0 font-xssss text-grey-900 border-bottom-xs bor-0">Invite Your
                                        Friends</h4>
                                </div>
                                <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0">
                                    <form
                                        class="chat-form invite-form position-absolute bottom-0 w-100 left-0 z-index-1 px-1 pb-2 shadow-xs theme-dark-bg">
                                        <div class="form-group"><input type="text" placeholder="Start typing.."
                                                class="pos-top text-grey-900"></div>
                                        <button class="bg-current"><i class="feather-send text-white"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-4 ps-md-0">
                            <div class="right-chat nav-wrap mt-2 right-scroll-bar active-sidebar">
                                <div class="middle-sidebar-right-content bg-white">

                                    <!-- loader wrapper -->
                                    <div class="preloader-wrap p-3" style="display: none;">
                                        <div class="box shimmer">
                                            <div class="lines">
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                            </div>
                                        </div>
                                        <div class="box shimmer mb-3">
                                            <div class="lines">
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                            </div>
                                        </div>
                                        <div class="box shimmer">
                                            <div class="lines">
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                                <div class="line s_shimmer"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section full pe-3 ps-4 pt-0 pb-4 position-relative feed-body">
                                        <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">Pages</h4>
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">

                                                <span
                                                    class="btn-round-sm bg-primary-gradiant me-3 ls-3 text-white font-xssss fw-700">AB</span>
                                                <h3 class="fw-700 mb-0 mt-0">
                                                    <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat"
                                                        href="#">Armany Seary</a>
                                                </h3>
                                                <span class="bg-success ms-auto btn-round-xss"></span>
                                            </li>
                                            <li
                                                class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">

                                                <span
                                                    class="btn-round-sm bg-gold-gradiant me-3 ls-3 text-white font-xssss fw-700">SD</span>
                                                <h3 class="fw-700 mb-0 mt-0">
                                                    <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat"
                                                        href="#">Entropio Inc</a>
                                                </h3>
                                                <span class="bg-success ms-auto btn-round-xss"></span>
                                            </li>

                                        </ul>
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