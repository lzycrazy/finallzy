<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Detail;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index()
    {
       
        return view('Admin.index');
    }

    
}
