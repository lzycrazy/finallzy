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
                                        <strong>Category</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" action="{{route('storesubcategory')}}">
                                            @csrf
                                           
                                            <div class="form-group">
                                                 <label for="company" class=" form-control-label">Category Name</label>
                                                    <select name="category_id" id="category_id" class="form-control">
                                                         <option selected disabled>Select Category Name</option>
                                                        @foreach($categoryid as $cate_id)
                                                        <option value="{{$cate_id->id}}">{{$cate_id->category_name}}</option>
                                                       @endforeach
                                                    </select>
                                                </div> 
                                                 <div class="form-group">
                                                <label for="company" class=" form-control-label">Sub Category</label>
                                                <input type="text" id="company" placeholder="Enter your cateory name" name="subcategory_name" class="form-control">
                                            </div>                                      
                                            <input type="submit" class="btn btn-primary" name="" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div> 
                            
                        </div>


                        
@endsection
