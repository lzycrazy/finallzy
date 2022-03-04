@extends('Admin.Layouts.adminmaster')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                                        <strong>Brand Details</strong>
                                        <small> Brand Details</small>
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
                                                 <label for="company" class=" form-control-label">Sub Category Name</label>
                                                    <select name="subcategory_id" id="subcategory_id" class="form-control">
                                                       
                                                    </select>
                                                </div> 
                                                 <div class="form-group">
                                                 <label for="company" class=" form-control-label">Brand Name</label>
                                                    <select name="brand" id="brand_id" class="form-control">
                                                        
                                                     
                                                    </select>
                                                </div> 
                                                 <div class="form-group" id="brand_details">
                                                
                                                
                                            </div>                                      
                                            <input type="submit" id="redirect_to_insert" class="btn btn-primary" name="" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div> 
                            
                        </div>

     <script>
        $(document).ready(function() {

        
          
            $('#category_id').on('change', function() {
                 categoryid = this.value;
                $("#subcategory_id").html('');
                $.ajax({
                  url:"{{url('/categoryid')}}",
                  type: "POST",
                  data: {
                      categoryid: categoryid,
                      _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#subcategory_id').html('<option value="">Select Subcategory</option>'); 
                    $.each(result.subcategory,function(key,value){
                        $("#subcategory_id").append('<option value="'+value.id+'">'+value.subcategory_name+'</option>');
                    });
                   $('#brand').html('<option value="">Select Sub category First</option>'); 
               }
           });
       });  

          $('#subcategory_id').on('change', function() {
                 subcategoryid = this.value;
                $("#brand_id").html('');
                $.ajax({
                  url:"{{url('/brandid')}}",
                  type: "POST",
                  data: {
                      subcategoryid: subcategoryid,
                      _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#brand_id').html('<option value="">Select Brand</option>'); 
                    $.each(result.brand,function(key,value){
                        $("#brand_id").append('<option value="'+value.id+'">'+value.brand_name+'</option>');
                    });
                    $('#brand_details').html('<label for="company" class=" form-control-label">Brand Details</label><input type="text" id="brand_details" placeholder="Enter your Brand Details" name="brand_details" class="form-control">');
               }
           });
       });  




    });
</script>
                        
@endsection
