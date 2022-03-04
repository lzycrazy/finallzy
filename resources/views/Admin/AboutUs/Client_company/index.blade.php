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
                                    <h2 class="title-1">Client Company</h2>
                                   <a href="{{route('add_clientCompany')}}"><button class="au-btn au-btn-icon au-btn--blue">
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
                                                <th>client title</th>
                                                <th>client Description</th>
                                                <th>client Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($clientCompany as $clientCompany_data)    
                                            <tr>

                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    {{ $clientCompany_data->client_company_title }}
                                                </td>
                                                <td>
                                                    {!! $clientCompany_data->client_company_description !!}
                                                </td>
                                                <td>
                                                    <img src="{{asset('')}}/{{$clientCompany_data->client_company_image}}" width="50" height="50">
                                                </td>
                                                <td>
                                                    active
                                                </td>
                                                <td>
                                                    btn                                       
                                                </td>
                                                <td>
                                                    <a href='{{ url("/{}") }}'>delete</a>
                                                </td>
                                                <td>
                                                    <a href='{{ url("/{}") }}'>Edit</a>
                                                </td>
                                    
                                            </tr>
                                            @endforeach                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>                            
                        </div>
                        
@endsection
