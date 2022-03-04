@extends('Admin.Layouts.adminmaster')

@section('content')


          <!-- MAIN CONTENT-->
         
            <div class="main-content">
                <div class="section__content section__content--p30">
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
                    <div class="container-fluid"> 
                         <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Banner Video</h2>
                                   <a href="{{route('add_bannervideo')}}"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button></a> 
                                </div>
                            </div>
                        </div><br>
                        <div class="row"> 
                                             
                            <div class="col-lg-12">
                                 <div class="table-responsive m-b-40">
                                    <table id="example" class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Bannervideo Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($banner_video as $bannerVideo)    
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <video width="180" height="180" autoplay controls>
                                                      <source src="{{asset('upload/Aboutus/Bannervedio/')}}/{{$bannerVideo['banner_video']}}" type="video/mp4">
                                                    </video>
                                                </td>
                                                <td>
                                                 @if ($bannerVideo->status == '0')
                                                        deactive
                                                @elseif($bannerVideo->status == '1')
                                                        Active
                                                 @else
                                                        Deleted
                                                  
                                                @endif
                                                </td>
                                                <td>
                                                     @if ($bannerVideo->status == '1')
                                                       <a href='{{ url("deactive_bannerVideo/{$bannerVideo->id}") }}'><button class="btn btn-warning ">deactive</button></a>
                                                @else
                                                       <a href='{{ url("active_bannerVideo/{$bannerVideo->id}") }}'> <button class="btn btn-success">Active</button ></a>
                                                  
                                                @endif

                                            </td>
                                              <td>
                                                   @if ($bannerVideo->status == '1')
                                                     <a href='{{ url("delete_bannerVideo/{$bannerVideo->id}") }}'>Delete</a>
                                                    @else 
                                                    @if ($bannerVideo->status == '2')
                                                      <a href='{{ url("deleteRevokebannerVideo/{$bannerVideo->id}") }}'>Revoke Delete</a>|
                                                      <a href='{{ url("deletePermanentbannerVideo/{$bannerVideo->id}") }}'>Permanent Delete</a>  
                                                    @else
                                                     <a href='{{ url("delete_bannerVideo/{$bannerVideo->id}") }}'>Delete</a>
                                                     @endif
                                                    @endif
                                                
                                                   
                                                </td>
                                                <td>
                                                    <a href='{{ url("editbannerVideo/{$bannerVideo->id}") }}'>Edit</a>
                                                </td>
                                                     
                                            <!--    
                                              <td>
                                                    <div class="table-data-feature">
                                                       <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                     
                                                    </div>
                                                </td> -->
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>                            
                        </div>
                        
@endsection
