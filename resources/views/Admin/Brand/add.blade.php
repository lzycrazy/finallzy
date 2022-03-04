@extends('Admin.Layouts.adminmaster')
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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
                            <strong>Brand</strong>
                            <small> Form</small>
                        </div>
                        <div class="card-body card-block">
                            <form method="post" action="{{route('send_data')}}">
                             
                                 @csrf
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Category name</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option selected disabled="">Select Category name</option>
                                        @foreach($category as $cate)
                                        <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                                        @endforeach                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Sub Category name</label>
                                    <select name="subcategory_id" id="subcategory_id" class="form-control">
                                                                           
                                    </select>
                                </div>
                                <div class="form-group" id="brand">
                                   
                                </div>

                                <input type="submit" class="btn btn-primary" name="submit" id="Submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div> 
                
            </div>

<script>
    $(document).ready(function () {
        $('#category_id').on('change', function () {

           var categoryid = this.value;
            //alert(categoryid);
            $("#subcategory_id").html('');
            $.ajax({
                url: "{{url('getsubcategory')}}",
                type: "POST",
                data: {
                    categoryid: categoryid,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#subcategory_id').html('<option value="">Select Sub Category</option>');
                    $.each(result.subcategory, function (key, value) {
                        $("#subcategory_id").append('<option value="'+value.id+'">' + value.subcategory_name + '</option>');
                    });
                     $('#brand').html(' <label for="company" class=" form-control-label">Enter Brand Name</label><input type="text" id="brand_name" placeholder="Enter your brand name" name="brand_name" class="form-control">');    
                }
            });
        });

    
    });
</script>
                        
@endsection
