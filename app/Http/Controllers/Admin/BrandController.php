<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BrandController extends Controller
{


    public function brand()
    {
        return view('Admin.Brand.list');
    }

    public function add_brand()
    {
        $category=Category::get();        
        // print_r($category);die();
        return view('Admin.Brand.add' , compact('category'));
    }

   

    public function store_brand(Request $request)
    {

        //dd($request);
        // dd("edrftgyhujim");
        //print_r($request->post());die();
         DB::table('brand')->insert([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_name' => $request->brand_name, 
        ]);

         return back();

        // return response()->json(
        //     [
        //         'success' => true,
        //         'message' => 'Data inserted successfully'
        //     ]
        // );
    }

    public function getsubcategoryy(Request $request)
    {
        $data['subcategory'] = SubCategory::where("category_id",$request->categoryid)->get(["subcategory_name", "id"]);
        return response()->json($data);
    }

    public function index()
    {
        $categoryid=Category::get();
          
        return view('Admin.BrandDetails.add', compact('categoryid'));
    }

   

      public function getsubcategory(Request $request)
    {
        $subcategory['subcategory']=SubCategory::where("category_id",$request->categoryid)
                    ->get(["subcategory_name","id"]);
        return response()->json($subcategory);
    }

     public function getbrand(Request $request)
    {
        $brand['brand']=Brand::where("subcategory_id",$request->subcategoryid)
                    ->get(["brand_name","id"]);
        return response()->json($brand);
    }

    public function storebranddetails(Request $request)
    {

         //store in the database
          $category = new BrandDetail;
         $category->category_name = $request->category_name;
         
         $category->save();
         return redirect('branddetails')->with('message','Added successfully');
    }

      public function branddetails()
    {
        $categoryid=Category::get();
        $subcategoryid=SubCategory::get();
        $id=1;

        return view('Admin.BrandDetails.list');
    }
}
