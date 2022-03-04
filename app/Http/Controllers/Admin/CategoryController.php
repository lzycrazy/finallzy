<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index()
    {


        return view('Admin.Category.add');
    }

    public function storecategory(Request $request)
    {

         if (Category::where('category_name', $request->category_name)->count() >0 ) {
            return redirect()->back()->with('error', 'Partner Title is already taken');
            // exit();
        }

         //store in the database
          $category = new Category;
         $category->category_name = $request->category_name;
         if($file =$request->file("category_icon"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/Category/categoryimage/',$uniqename);
                $category->category_icon = $ImgPath;
             }
         
         $category->save();
         return redirect('category')->with('message','Added successfully');
    }

      public function category()
    {
        $category=Category::get();
        $id=1;

        return view('Admin.Category.list', compact('category','id'));
    }

        // edit Subject Category Mapping
        public function edit($id)
        {

            $category=Category::find($id);
            //print_r($subject_list);die();


            return view('Admin.Category.edit', compact( 'category'));

    }

    public function update(Request $request, $id)
    {

        $category = Category::find($id);
         $category->category_name = $request->category_name;

        $category->update();
        return redirect('category')->with('message','category Updated Successfully');
    }

      // function to active admins
    public function active_category($id)
    {
        if (Category::where('id', $id)->update(['status' => '1'])) {
            return redirect('category')->with('message', 'category  is active now');
        } else {
            return redirect('category')->with('category', 'category is not active now');
        }
    }

     // function to deactive admins
    public function deactive_category($id )
    {
        if (Category::where('id', $id)->update(['status' => '0'])) {
            return redirect('category')->with('error', 'category is deactive now');
        } else {
            return redirect('category')->with('category', 'category is active now');
        }
    }

      // delete Category
    public function delete($id){
        if(Category::where('id', $id)->update(['status' => '2'])){
            return redirect('category')->with('error', 'category  deleted');
        }else{
            return redirect('category')->with('category', 'category not deleted');
        }
    }
         // delete Category
    public function deleteRevoke($id){
        if(Category::where('id', $id)->update(['status' => '0'])){
            return redirect('category')->with('error', 'category Revoke deleted');
        }else{
            return redirect('category')->with('category', 'category not deleted');
        }
    }
         // delete Category
    public function deletePermanent($id){
        if(Category::where('id', $id)->delete()){
            return redirect('category')->with('error', 'category Permanent deleted');
        }else{
            return redirect('category')->with('category', 'category not deleted');
        }
    }



    ///////////////////////////Sub Category///////////////////////////////////////////
    public function addsubcategory()
    {
        $categoryid = DB::table('category')->get(); 
        $id=1;

        return view('Admin.SubCategory.add', compact('categoryid','id'));
    }

    public function storesubcategory(Request $request)
    {

    
         //store in the database
          $subcategory = new SubCategory;
         $subcategory->category_id = $request->category_id;
         $subcategory->subcategory_name = $request->subcategory_name;
         
         $subcategory->save();
         return redirect('subcategory')->with('message','Added successfully');
    }

      public function subcategory()
    {
        $subcategory=SubCategory::join('category','category.id','=','subcategory.category_id')->select('subcategory.*','category.category_name')->get();
        $id=1;

        return view('Admin.SubCategory.list', compact('subcategory','id'));
    }

        // edit Subject Category Mapping
        public function editsubcategory($id)
        {

            $subcategory=SubCategory::find($id);
            //print_r($subject_list);die();


            return view('Admin.SubCategory.edit', compact( 'subcategory'));

    }

    public function updatesubcategory(Request $request, $id)
    {

        $subcategory = SubCategory::find($id);
         $subcategory->category_name = $request->category_name;

        $subcategory->update();
        return redirect('subcategory')->with('message','subcategory Updated Successfully');
    }

      // function to active admins
    public function active_subcategory($id)
    {
        if (SubCategory::where('id', $id)->update(['status' => '1'])) {
            return redirect('subcategory')->with('message', 'subcategory  is active now');
        } else {
            return redirect('subcategory')->with('subcategory', 'subcategory is not active now');
        }
    }

     // function to deactive admins
    public function deactive_subcategory($id )
    {
        if (SubCategory::where('id', $id)->update(['status' => '0'])) {
            return redirect('subcategory')->with('error', 'subcategory is deactive now');
        } else {
            return redirect('subcategory')->with('category', 'subcategory is active now');
        }
    }

      // delete Category
    public function deletesubcategory($id){
        if(SubCategory::where('id', $id)->update(['status' => '2'])){
            return redirect('subcategory')->with('error', 'subcategory  deleted');
        }else{
            return redirect('subcategory')->with('subcategory', 'subcategory not deleted');
        }
    }
         // delete Category
    public function deleteRevokesubcategory($id){
        if(SubCategory::where('id', $id)->update(['status' => '0'])){
            return redirect('subcategory')->with('error', 'subcategory Revoke deleted');
        }else{
            return redirect('subcategory')->with('subcategory', 'subcategory not deleted');
        }
    }
         // delete Category
    public function deletePermanentsubcategory($id){
        if(SubCategory::where('id', $id)->delete()){
            return redirect('subcategory')->with('error', 'subcategory Permanent deleted');
        }else{
            return redirect('subcategory')->with('subcategory', 'subcategory not deleted');
        }
    }
}
