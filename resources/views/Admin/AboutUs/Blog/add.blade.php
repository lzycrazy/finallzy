@extends('Admin.Layouts.adminmaster')

@section('content')


          <!-- MAIN CONTENT-->
         
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">                    

                        <div class="row">
                        @if (session('message'))
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <span class="text-center">{{ session('message') }}</span>
                        </div>
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <span class="text-center">{{ session('error') }}</span>
                        </div>
                    </div>
                </div>
            @endif                              
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Blog</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" action="{{route('storeblog')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title" class=" form-control-label">Blog Title</label>
                                                <input type="text" id="title" name="title" placeholder="Enter title" class="form-control">
                                            </div>
                                             <div class="form-group">
                                                <label class=" form-control-label">Blog Description</label>
                                              <textarea id="content" name="description"></textarea>
                                            </div>
                                                <div class="col-md-12 form-group">
                                             <label class="control-label">blog image</label>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                         
                                                         <input type="file" name="blog_image" id="profile-img" required> 
                                                        </div>
                                        <div class="col-md-6">
                                             <img src="" id="profile-img-tag" width="200px" />
                                        </div>
                                        </div>
                                        </div>
                                         
                                                                              
                                            <input type="submit" class="btn btn-primary" name="" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div> 
                            
                        </div>
                        
@endsection
