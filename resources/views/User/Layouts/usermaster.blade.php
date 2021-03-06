 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lzycrazy - @yield('page-title') </title>

    <link rel="stylesheet" href="{{ asset('User/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('User/css/feather.css') }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('User/images/favicon.png') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('User/css/style.css') }}">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{ asset('User/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/css/emoji.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('User/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/css/lightbox.css') }}">

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=PT+Sans:ital@1&family=Saira+Condensed:wght@500&family=Ubuntu:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=PT+Sans:ital@1&family=Saira+Condensed:wght@600&family=Ubuntu:ital,wght@0,300;1,400&display=swap" rel="stylesheet">    
  
    

</head>

<body class="color-theme-blue saira">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation top-->
        <div class="nav-header bg-white shadow-xs border-0">
            <div class="nav-top">
                <a href="{{route('home')}}"><img src="images/logo.png" class="" alt="image"></a>
                <a href="#" class="mob-menu ms-auto me-2 chat-active-btn">
                <i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i>
                </a>
                
                <a href="default-video.html" class="mob-menu me-2">
                <i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                
                <a href="#" class="me-2 menu-search-icon mob-menu">
                <i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                
                <button class="nav-menu me-0 ms-2"></button>
            </div>

           
            <a href="{{route('home')}}" class="p-2 text-center ms-3 menu-icon center-menu-icon">
            <i class="fas fa-home font-xs alert-primary btn-round-smm theme-dark-bg text-current" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home"></i></a>
            <a href="{{route('market')}}" class="p-2 text-center ms-0 menu-icon center-menu-icon">
            <i class="fas fa-shopping-cart font-xs shadow-ms bg-greylight btn-round-smm theme-dark-bg text-grey-500" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Shopping"></i></a>
            <a href="default-video.html" class="p-2 text-center ms-0 menu-icon center-menu-icon">
            <i class="fas fa-video font-xs bg-greylight btn-round-smm theme-dark-bg text-grey-500" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video"></i></a>
            <i class="fab fa-adversal font-xl shadow-ms bg-greylight btn-round-lg theme-dark-bg text-grey-500 pt" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Form page" data-toggle="modal" data-target=".bd-example-modal-lg"></i>
            <form action="#" class="float-left header-search">
                <div class="form-group mb-0 icon-input">
                    <i class="feather-search font-sm text-grey-400" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Form page"></i>
                    <input type="text" placeholder="Start typing to search.."
                        class="bg-grey border-0 lh-32 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-3 w350 theme-dark-bg">
                </div>
            </form>
            <a href="default-settings.html" class="p-1 ms-3 ms-auto menu-icon rignt-topbar">
                <img src="images/profile-4.png" alt="user" class="w30 mt--1"> Test</a>
            <a href="" class="p-2 text-center ms-3  menu-icon rignt-topbar">
            <i class="fa fa-users font-smm" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Users"></i></a>
            <a href="#" class="p-2 text-center ms-2 menu-icon chat-active-btn rignt-topbar">
            <i class="fas fa-comment font-smm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="chatting"></i></a>
            <a href="#" class="p-2 text-center  menu-icon rignt-topbar" id="dropdownMenu3" data-bs-toggle="dropdown"
                aria-expanded="false"><span class="dot-count bg-warning"></span>
                <i class="fa fa-bell font-smm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notification"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-end p-2 rounded-3 border-0 shadow-lg custom-shadow"
                aria-labelledby="dropdownMenu3">
                <h4 class="fw-700 font-xss mb-4">Notification</h4>
                <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                    <img src="https://via.placeholder.com/50x50.png" alt="user"
                        class="w40 position-absolute left-0 rounded-circle">
                    <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Hendrix Stamp <span
                            class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 3 min</span></h5>
                    <h6 class="text-grey-500 fw-500 font-xssss lh-4">There are many variations of pass..</h6>
                </div>
                <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                    <img src="https://via.placeholder.com/50x50.png" alt="user"
                        class="w40 position-absolute left-0 rounded-circle">
                    <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Goria Coast <span
                            class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 2 min</span></h5>
                    <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
                </div>

                <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                    <img src="https://via.placeholder.com/50x50.png" alt="user"
                        class="w40 position-absolute left-0 rounded-circle">
                    <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Surfiya Zakir <span
                            class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 1 min</span></h5>
                    <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
                </div>

                <div class="card bg-transparent-card w-100 border-0 ps-5">
                    <img src="https://via.placeholder.com/50x50.png" alt="user"
                        class="w40 position-absolute left-0 rounded-circle">
                    <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Victor Exrixon <span
                            class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 30 sec</span></h5>
                    <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
                </div>
            </div>
            <div
                class="p-2 text-center ms-3 position-relative dropdown-menu-icon menu-icon cursor-pointer rignt-topbar">
                <i class="fas fa-user-cog d-inline-block font-xsss" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Setting"></i>
                <div class="dropdown-menu-settings switchcolor-wrap">
                    <h4 class="fw-700 font-sm mb-1  px-3 shadow-messaage-box py-1"> Lazycrazy</a></h4>

                    <div class="card bg-transparent-card border-0 d-block mt-1 pt-1 border-top  px-3">
                        <a href="#" class="d-flex align-items-center shadow-messaage-box p-1 px-2">
                        <i class="fas fa-user-cog text-white font-xs me-3 py-1"></i>
                            <h4 class="fw-600 font-xsss mb-0 mt-0 ms-auto">General Setting</h4>
                        </a>
                    </div>
                    <div class="card bg-transparent-card border-0 d-block mt-1 border-top pt-1 px-3">
                        <a href="#" class="d-flex align-items-center  shadow-messaage-box p-1 px-2">
                        <i class='fas fa-sign-out-alt text-white font-xs me-3 py-1'></i>
                            <h4 class="fw-600 font-xsss mb-0 mt-0 ms-auto">Logout</h4>
                        </a>
                    </div>
                    <div class="card bg-transparent-card border-0 d-block mt-2 px-3">
                        <h4 class="d-inline fw-600 font-xsss">Dark Mode</h4>
                        <div class="d-inline float-right">
                            <label class="toggle toggle-dark"><input type="checkbox"><span
                                    class="toggle-icon"></span></label>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- navigation top -->
          @yield('content')
        <!-- navigation left -->
      
        <!-- navigation left -->
   

<!-- /////////////////End Header////////////////////////////// -->
        <!-- right chat -->


     

    </div>
    <div class="modal fade" id="postmodal" tabindex="-1" role="dialog" aria-labelledby="postmodal" aria-hidden="true" style="background: rgba(243, 243, 244, 0.3); padding-right: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-xxl">
                <div class="modal-header text-center d-block">
                    <h3 class="modal-title text-grey-900 fw-700" id="postmodalTitle">Create Post</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card w-100 mb-0 border-0">
                        <div class="card-body p-0 d-flex">
                            <figure class="avatar me-3"><img src="https://via.placeholder.com/50x50.png" alt="image"
                                    class="shadow-sm rounded-circle w45"></figure>
                            <h4 class="fw-700 text-grey-900 font-xss mt-1">Surfiya Zakir <span
                                    class="d-block font-xssss fw-500 mt-0 lh-3 text-grey-500"><select
                                        class="form-select w-auto p-0 h-50 bg-grey d-block font-xssss fw-500 mt-0 lh-3 text-grey-500 w-30 px-3"
                                        aria-label="Default select example">
                                        <option selected=""> Everyone</option>
                                        <option value="1"> Only me</option>
                                        <option value="2"> People I Follow</option>
                                        <option value="3"> People Follow Me</option>
                                        <option value="3"> Anonymous</option>
                                    </select></span>
                            </h4>
                        </div>
                    </div>
                    <div class="card-body p-0 mt-0 position-relative">
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" data-toggle="modal" data-target="#exampleModal"
                                    class="h50 bor-0 w-100 rounded-xxl p-2 border-0  font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg"
                                    cols="30" rows="3"
                                    placeholder="What's going on? #Hashtag.. @Mention.. Link.."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex p-0 mt-0 border py-2 rounded-xxl">
                        <a href="#"
                            class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pr-4 pl-0 upload-image-btn position-relative">
                            <i class="font-md text-success feather-image me-2"><input type="file" id="publisher-photos"
                                    accept="image/x-png, image/gif, image/jpeg" name="postPhotos[]"
                                    multiple="multiple"></i>
                            <span class="d-none-xs">Photo/Video</span></a>
                        <a href="#" class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark"><i
                                class="font-md text-warning feather-heart me-2"></i><span class="d-none-xs"></span></a>
                    </div>
                    <div class="modal-footer border-0 d-block pt-3 p-0">
                        <button type="button" class="w-100 text-white bg-current m-0 rounded-xxl py-1">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal bottom side fade" id="storiesmodal" tabindex="-1" aria-labelledby="storiesmodal" role="dialog"
        style=" overflow-y: auto;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 bg-transparent">
                <button type="button" class="close mt-0 position-absolute top--30 right--10" data-dismiss="modal"
                    aria-label="Close"><i class="ti-close text-white font-xssss"></i></button>
                <div class="modal-body p-0">
                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                        <div class="card-body p-4 w-100 bg-current border-0">
                            <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2 text-center">Create New Status</h4>
                        </div>
                        <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="saira fw-600 font-xsss">What is going on</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="card mt-3 border-0">
                                            <div class="card-body d-flex justify-content-between align-items-end p-0">
                                                <div class="form-group mb-0 w-100">
                                                    <input type="file" name="file" id="file" class="input-file">
                                                    <label for="file"
                                                        class="rounded-3 text-center bg-white btn-tertiary js-labelFile p-4 w-100 border-dashed">
                                                        <i class="ti-cloud-down large-icon me-3 d-block"></i>
                                                        <span class="js-fileName">Drag and drop or click to
                                                            replace</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="saira fw-600 font-xsss">Description</label>
                                        <textarea class="form-control mb-0 p-3 h100 bg-greylight lh-16" rows="5"
                                            placeholder="Write your message..." spellcheck="false"></textarea>
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="#"
                                            class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Create</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal bottom side fade" id="addusermodal" tabindex="-1" aria-labelledby="addusermodal" role="dialog"
        style=" overflow-y: auto;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 bg-transparent">
                <button type="button" class="close mt-0 position-absolute top--30 right--10" data-dismiss="modal"
                    aria-label="Close"><i class="ti-close text-white font-xssss"></i></button>
                <div class="modal-body p-0">
                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                        <div class="card-body p-4 w-100 bg-current border-0">
                            <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2 text-center"> Create New Group</h4>
                        </div>
                        <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="saira fw-600 font-xsss">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="card mt-3 border-0">
                                            <div class="card-body d-flex justify-content-between align-items-end p-0">
                                                <div class="form-group mb-0 w-100">
                                                    <input type="file" name="file" id="file" class="input-file">
                                                    <label for="file"
                                                        class="rounded-3 text-center bg-white btn-tertiary js-labelFile p-4 w-100 border-dashed">
                                                        <i class="ti-cloud-down large-icon me-3 d-block"></i>
                                                        <span class="js-fileName">Drag and drop or click to
                                                            replace</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="saira fw-600 font-xsss">Add Participant</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="#"
                                            class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Create</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-popup-chat">
        <div class="modal-popup-wrap p-0 shadow-lg rounded-3 bg-greylight">
            <div class="modal-popup-header w-100 border-bottom">
                <div class="card p-3 d-block border-0 d-block">
                    <figure class="avatar mb-0 float-left me-2">
                        <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35 me-1 rounded-circle">
                    </figure>
                    <div class="card-body d-flex p-0 mt-0 shadow-br">
                        <h5 class="fw-700 text-primary font-xssss mt-1 mb-1">Hendrix Stamp <span
                                class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h5><a href="#"
                            class="font-xssss position-absolute right-0 top-0 mt-1 me-2"><i
                                class="ti-close text-grey-900 mt-2 d-inline-block"></i></a><a href="#"
                            class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-1 ms-auto"><i
                                class="font-md text-danger feather-video me-2"></i></a>
                        <a href="#"
                            class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-1"><i
                                class="font-md text-success feather-image me-2"></i></a>
                        <a href="#"
                            class="d-flex align-items-center font-xssss fw-600 ls-1 text-grey-700 text-dark pe-1"><i
                                class="font-md text-warning feather-camera me-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="modal-popup-body w-100 p-3 h-auto">
                <div class="message">
                    <div class="message-content font-xssss lh-24 fw-500">Hi, how can I help you?</div>
                </div>
                <div class="date-break font-xsssss lh-24 fw-500 text-grey-500 mt-2 mb-2">Mon 10:20am</div>
                <div class="message self text-right mt-2">
                    <div class="message-content font-xssss lh-24 fw-500">I want those files for you. I want you to send
                        1 PDF and 1 image file.</div>
                </div>
                <div class="snippet pt-3 ps-4 pb-2 pe-3 mt-2 bg-grey rounded-xl float-right" data-title=".dot-typing">
                    <div class="stage">
                        <div class="dot-typing"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-popup-footer w-100 border-top bg-greylight">
                <div class="card p-3 d-block border-0 d-block">
                    <div class="form-group icon-right-input style1-input mb-0"><input type="text"
                            placeholder="Start typing.."
                            class="form-control rounded-xl bg-greylight border-0 font-xssss fw-500 ps-3"><i
                            class="feather-send text-grey-500 font-md"></i></div>
                </div>
            </div>
        </div>
    </div>
    
    
    

   <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-left: 50px !important;padding-right: 50px !important;" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Sell new product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-heading">
        <h5>Choose a category</h5>
        <div>
        
        <div class="model-list">
        <div class="col-xs-12">

            <!-- tabs <i class="fa fa-arrow-right"></i>-->
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs cat-icon">  
                    @foreach ($category as $key => $cate)
                    @php
                        $key++;
                    @endphp
                    <li class="category <?=  $key == 1 ? ' active' : '' ?>" data-key="{{ $key }}"><a href="#<?= $cate->id ?>" data-toggle="tab" ><img src="{{asset('')}}/{{$cate->category_icon}}">{{$cate->category_name}}</a></li> 
                    @endforeach                                 
                </ul>
                
                <div class="tab-content">
                    @foreach ($category as $key => $cate)
                    @php
                        $key++;
                    @endphp
                    <div class="tab-pane <?=  $key == 1 ? ' active' : ''  ?>" id="#<?= $cate->id ?>" data-key="{{ $key }}">
                        <div class="">
                            <!--<h1>Phone</h1>-->
                            <ul class="tap-pane-list" id="" class="subCategory">
                                @foreach ($subcategory as $key => $subcate)
                                    @if($cate->id == $subcate->category_id)
                                        <li onclick="">
                                            <a href="" data-toggle="modal" data-target="    #exampleModalLong">{{$subcate->subcategory_name}}</a>
                                    <div class="modal fade model-bg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="padding-left: 350px !important;padding-right: 350px !important; background-color:#111">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title align-items-center text-center" id="exampleModalScrollableTitle">Sell new product</h5>
                                          </div>
                                          <div class="modal-body">
                                        <!---Phones fild form-->
                                        <div class="container">
                                        <div class="row">
                                        
                                        <div class="form-group fromdg">
                                          <div class="user_details">
                                            <h5>Mobile Phones</h5>
                                            </div>
                                        
                                        <form>
                                        <div class="row">
                                        <div class="col-4">
                                                <label class="formlabel">Brand</label>
                                                <select class="form-control" id="brand" name="brand">
                                                <option value="72">IPhone</option>
                                                <option value="73">Samsung</option>
                                                <option value="74">Mi</option>
                                                <option value="76">Oppo</option>
                                                <option value="77">Vivo</option>
                                                <option value="79">Realme</option>
                                                <option value="80">One Plus</option>
                                                <option value="81">Google Pixel</option>
                                                <option value="82">Nokia</option>
                                                <option value="83">Asus</option>
                                                <option value="84">Micromax</option>
                                                <option value="85">Huawei</option>
                                                <option value="86">Sony</option>
                                                <option value="87">HTC</option>
                                                <option value="88">BlackBerry</option>
                                                <option value="89">Lenovo</option>
                                                <option value="90">Karbonn</option>
                                                <option value="91">Lava</option>
                                                <option value="92">Motorola</option>
                                                <option value="93">Gionee</option>
                                                <option value="95">Huawei</option>
                                                <option value="96">Intex</option>
                                                <option value="97">Infinix</option>
                                                <option value="98">Techno</option>
                                                <option value="100">LG</option>
                                                <option value="101">Other Mobiles</option>
                                                </select>
                                            </div>
                                            <div class="col-8">
                                                <label class="formlabel" for="exampleInputName">Title*</label>
                                                <input type="text" class="form-control" id="title" name="name" required="">
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="formlabel" for="text">Description:</label>
                                                <textarea style="height:60px;" class="form-control" name="description" id="description"></textarea>
                                            </div>
                                            
                                            <div class="row">
                                            <div class="col-4 price-inputBox">
                                                <label class="formlabel" for="exampleInputName">Set Price*</label>
                                                <input type="text" class="form-control set_price" id="set_price" name="price" required="" onkeyup="setCurrencyFormat()">
                                                <i class="fas fa-rupee-sign"></i>
                                            </div>
                                            <div class="col-8">
                                                <label class="formlabel" for="exampleInputName">Location</label>
                                                <input type="text" class="form-control pac-target-input" id="location" name="location" placeholder="Enter a location" autocomplete="off">
                                            </div>
                                            </div>
                                            
                                            <div class="col-12">
                                            <label class="formlabel" for="text">Product Pics:</label>
                                            <div class="imageuploadify well">
                                            <input type="file" class="form-control" multiple="" name="product_pics[]" id="product_pics" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" style="display: none;">
                                            <div class="imageuploadify-images-list text-center">
                                            <i class="fas fa-camera"></i>
                                            <button type="button" class="btn btn-default" style="background: white; color: rgb(58, 160, 255);">select file to upload</button>
                                            </div>
                                            </div>  
                                            </div>
                                            

                                        <div class="clearfix"></div> 
                                            <div class="col-12 row user_details">
                                                <!--<h2 class="text-center">Review your details:</h2>-->
                                                <div class="col-6">
                                                    <label class="formlabel" for="exampleInputName">Your Name</label>
                                                    <input type="text" class="form-control" id="publisher_name" name="publisher_name" required="">
                                                </div>
                                                <div class="col-6">
                                                    <label class="formlabel" for="exampleInputName">Your Contact Number</label>
                                                    <input type="text" class="form-control" id="contact_number" name="contact_number" required="">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="submit_frm text-center">
                                                <button type="submit" class="btn btn-primary" onclick="createNewPro(event)">Submit</button>
                                        </div>
                                        </form>
                                        </div>
                                        </div>
                                        </div>
                                        </div> 
                                        </div>
                                      </div>
                                    </div>  
                                        </li>
                                    @endif
                                @endforeach
                               <!--  <li onclick=""><a href="">Tablets</a></li> -->
                            </ul>
                            
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div>
            <!-- /tabs -->
        </div>
</div>
    
        



        
      </div>
    </div>
  </div>
</div>
</div>
</div>
                
                


    

    <script src="{{ asset('User/js/plugin.js') }}"></script>
    <script src="{{ asset('User/js/lightbox.js') }}"></script>
    <script src="{{ asset('User/js/scripts.js') }}"></script>
    <script src="{{ asset('User/js/float-sidebar.js') }}"></script>
       <!--<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>-->

      <script src="{{ asset('User/js/bootstrap.min.js') }}"></script>


    <script>
        var sidebar = document.querySelector('.sidebar');
        var content = document.querySelector('.content');

        var floatSidebar = FloatSidebar({
            sidebar: sidebar,
            relative: content,
            topSpacing: 40,
            bottomSpacing: 40
        });
    </script>




<script>
  $('.modal').css('overflow-y', 'auto');
</script>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});



$(function(){
    $('.category').on('click', function(){
        let key = $(this).data('key');
        let tabs = $('.tab-pane');
        $(tabs).each(function(tabKey, tab){
            if($(tab).data("key") == key){
                $(tab).addClass("active");
            }else{
                $(tab).removeClass("active");
            }
        });
    });
});



</script>



</body>

</html>