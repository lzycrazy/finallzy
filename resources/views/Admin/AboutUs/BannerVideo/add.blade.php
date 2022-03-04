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
                                        <strong>Banner Video</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" enctype="multipart/form-data" action="{{route('storebannervideo')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="video" class=" form-control-label">banner video</label>
                                                <input type="file" id="banner_video" name="banner_video" class="form-control">
                                            </div>                                       
                                            <input type="submit" class="btn btn-primary" name="" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div> 
                            
                        </div>
                        
@endsection
