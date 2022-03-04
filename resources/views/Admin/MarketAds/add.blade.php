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
                                        <strong>Ads </strong>
                                        <small> Ads</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
                                            @csrf
                                          <div class="col-md-12 form-group">
                                              <label class="control-label">Banner</label>
                                                      <div class="row">
                                                       
                                                        <div class="col-md-6">
                                                         
                                                         <input type="file" name="banner" id="profile-img"required> 
                                                        </div>
                                        <div class="col-md-6">
                                             <img src="" id="profile-img-tag" width="200px" />
                                        </div>
                                        </div>
                                        </div>
                                           <div class="col-md-12 form-group">
                                              <label class="control-label">Image</label>
                                                      <div class="row">
                                                      
                                                        <div class="col-md-6">
                                                          
                                                         <input type="file" name="image" id="profile-img"required> 
                                                        </div>
                                        <div class="col-md-6">
                                             <img src="" id="profile-img-tag" width="200px" />
                                        </div>
                                        </div>
                                        </div>

                                         <div class="col-md-12 form-group">
                                             <label class="control-label">Vedio</label><br>

                                                  <input type="file" name="video"/>
                                        </div>
                                     
                                                                                  
                                            <input type="submit" class="btn btn-primary" name="" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div> 
                            
                        </div>

     
                        
@endsection
