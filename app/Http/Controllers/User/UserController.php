<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {

    $category=Category::where('status','1')->get();
     $subcategory=SubCategory::where('status','1')->get();

    return view('User.home', compact('category','subcategory'));
   }

   public function usermaster()
   {

    $category=Category::where('status','1')->get();
    $subcategory=SubCategory::where('status','1')->get();

    //print_r($subcategory);die();

    return view('User.Layouts.usermaster', compact('category','subcategory'));
   }

    public function getsubcate(Request $request)
    {
        $data['subcategory'] = SubCategory::where("category_id",$request->categoryid)->get(["subcategory_name", "id"]);
        return response()->json($data);
    }

}
