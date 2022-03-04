<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;

class PhoneController extends Controller
{
    public function phone($id)
    {
        $category=Category::where('id',$id)->get();
       $subcate =DB::table('subcategory')->where('category_id',$id)->get();
       $brand=DB::table('brand')->where('category_id',$id)->get();
        $subcategory=SubCategory::where('status','1')->get();
        // print_r($gallerycate);die();
        return view('User.phone',compact('subcate','category','brand','subcategory'));
    }

    public function phonedetails()
    {

        return view('User.phonedetails');
    }
}
