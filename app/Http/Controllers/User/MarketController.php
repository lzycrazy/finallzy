<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MarketAds;
use Illuminate\Http\Request;

class MarketController extends Controller
{
     public function index()
     {
      $category=Category::get();
      $marketads=MarketAds::get();

    $subcategory=SubCategory::where('status','1')->get();

       return view('User.market', compact('category','marketads','subcategory'));

     }
}
