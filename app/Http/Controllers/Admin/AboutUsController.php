<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerVedio;
use App\Models\Blog;
use App\Models\BannerCompany;
use App\Models\AboutCompany;
use App\Models\TeamCompany;
use App\Models\VisionCompany;
use App\Models\PeopleCompany;
use App\Models\ClientCompany;

class AboutUsController extends Controller
{
    public function index()
    {
        $banner_video=BannerVedio::get();
        // print_r($banner_video);die();
        return view('Admin.AboutUs.BannerVideo.index',compact('banner_video'));
    }
    public function create()
    {
        return view('Admin.AboutUs.BannerVideo.add');
    }
    public function storebannervideo(Request $request)
    {

        //store in the database
          $bannervedio = new BannerVedio;

        $file=$request->file('banner_video');
       $file->move('upload/Aboutus/Bannervedio/',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();
         
        $bannervedio->banner_video = $file_name;
         
         $bannervedio->save();
         return redirect('bannervideo/index')->with('message','Added successfully');
    }

      // function to active admins
    public function active_bannerVideo($id)
    {
        if (BannerVedio::where('id', $id)->update(['status' => '1'])) {
            return redirect('bannervideo/index')->with('message', 'bannerVideo  is active now');
        } else {
            return redirect('bannervideo/index')->with('bannerVideo', 'bannerVideo is not active now');
        }
    }

     // function to deactive admins
    public function deactive_bannervideo($id )
    {
        if (BannerVedio::where('id', $id)->update(['status' => '0'])) {
            return redirect('bannervideo/index')->with('error', 'bannerVideo is deactive now');
        } else {
            return redirect('bannervideo/index')->with('bannerVideo', 'bannerVideo is active now');
        }
    }

      // delete bannerVideo
    public function delete($id){
        if(BannerVedio::where('id', $id)->update(['status' => '2'])){
            return redirect('bannervideo/index')->with('error', 'bannerVideo  deleted');
        }else{
            return redirect('bannervideo/index')->with('bannerVideo', 'bannerVideo not deleted');
        }
    }
         // delete bannerVideo
    public function deleteRevoke($id){
        if(BannerVedio::where('id', $id)->update(['status' => '0'])){
            return redirect('bannervideo/index')->with('error', 'bannerVideo Revoke deleted');
        }else{
            return redirect('bannervideo/index')->with('bannerVideo', 'bannerVideo not deleted');
        }
    }
         // delete bannerVideo
    public function deletePermanent($id){
        if(BannerVedio::where('id', $id)->delete()){
            return redirect('bannervideo/index')->with('error', 'bannerVideo Permanent deleted');
        }else{
            return redirect('bannervideo/index')->with('bannerVideo', 'bannerVideo not deleted');
        }
    }

    // blog start//    
    public function blog_index()
    {
        $blog = Blog::get();
        return view('Admin.AboutUs.Blog.index',compact('blog'));
    }
    public function blog_create()
    {
        return view('Admin.AboutUs.Blog.add');
    }
    public function storeblog(Request $request)
    {

        //print_r($request);die();
        //store in the database
          $blog = new Blog;
         $blog->title = $request->title;
         $blog->description = $request->description;
    
            if($file =$request->file("blog_image"))
            {
                $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath = $file->move('upload/Aboutus/blogimage/',$uniqename);
                $blog->blog_image = $ImgPath;
             }
         
         $blog->save();
         return redirect('blog/index')->with('message','Added successfully');
    }
    // blog end//

    //vision start//
    public function vision_index()
    {
        $visionCompany = VisionCompany::get();

        return view('Admin.AboutUs.Vision.index',compact('visionCompany'));
    }
  
    public function vision_create()
    {
        return view('Admin.AboutUs.Vision.add');
    }
    public function storevision(Request $request)
    {
        //store in the database
        $visionCompany = new visionCompany;
        
    
        $visionCompany->vision_company_title = $request->vision_company_title;
        $visionCompany->vision_company_description = $request->vision_company_description;
    
            if($file =$request->file("vision_company_icon"))
            {
                $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/Aboutus/VisionCompany/',$uniqename);
                $visionCompany->vision_company_icon = $ImgPath;
            }
         
        $visionCompany->save();
        return redirect('vision/index')->with('message','Added successfully');
    }
    //vision end//

    //people start//
    public function people_index()
    {
        $peopleCompany = PeopleCompany::get();
        return view('Admin.AboutUs.People.index',compact('peopleCompany'));
    }
    public function people_create()
    {
        return view('Admin.AboutUs.People.add');
    }
    public function storepeople(Request $request)
    {
       //store in the database
        $peoplecompany = new PeopleCompany;
        $peoplecompany->people_name = $request->people_name;
         $peoplecompany->people_company_title = $request->people_company_title;
         $peoplecompany->people_company_description = $request->people_company_description;
    
            if($file =$request->file("people_company_icon"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/Aboutus/peoplecompanyimage/',$uniqename);
                $peoplecompany->people_company_icon = $ImgPath;
             }
         
         $peoplecompany->save();
         return redirect('people/index')->with('message','Added successfully'); 
    }
    //people end//

    ////Banner company info start////
    public function bannerCompany_index()
    {
        $bannerCompany = BannerCompany::get();
        return view('Admin.AboutUs.Banner_company.index', compact('bannerCompany'));
    }
    public function bannerCompany_create()
    {
        return view('Admin.AboutUs.Banner_company.add');
    }
    public function storebannercompany(Request $request)
    {
        //store in the database
        $BannerCompany = new BannerCompany;
    
         $BannerCompany->banner_company_title = $request->banner_company_title;
         $BannerCompany->banner_company_description = $request->banner_company_description;
    
            if($file =$request->file("banner_company_image"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/Aboutus/BannerCompany/',$uniqename);
                $BannerCompany->banner_company_image = $ImgPath;
             }
         
         $BannerCompany->save();
         return redirect('bannerCompany/index')->with('message','Added successfully'); 
    }
    ////Banner company info end////

    ////About company info start////
    public function aboutCompany_index()
    {
        $aboutCompany = AboutCompany::get();
        // print_r($aboutCompany);die();

        return view('Admin.AboutUs.About_company.index',compact('aboutCompany'));
    }
    public function aboutCompany_create()
    {
        return view('Admin.AboutUs.About_company.add');
    }
    public function storeaboutcompany(Request $request)
    {
       //store in the database
        $aboutCompany = new AboutCompany;
        
    
        $aboutCompany->about_company_title = $request->about_company_title;
        $aboutCompany->about_company_description = $request->about_company_description;
    
            if($file =$request->file("about_company_image"))
            {
                $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/Aboutus/AboutCompany/',$uniqename);
                $aboutCompany->about_company_image = $ImgPath;
            }
         
        $aboutCompany->save();
        return redirect('aboutCompany/index')->with('message','Added successfully');
    }
    ////About company info end////

    ////Team company info start////
    public function teamCompany_index()
    {
        $teamCompany = TeamCompany::get();

        return view('Admin.AboutUs.Team_company.index',compact('teamCompany'));
    }
    public function teamCompany_create()
    {
        return view('Admin.AboutUs.Team_company.add');
    }
    public function storeteamcompany(Request $request)
    {
        //store in the database
        $teamCompany = new teamCompany;
        
    
        $teamCompany->team_company_title = $request->team_company_title;
        $teamCompany->team_company_description = $request->team_company_description;
    
            if($file =$request->file("team_company_image"))
            {
                $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/Aboutus/TeamCompany/',$uniqename);
                $teamCompany->team_company_image = $ImgPath;
            }
         
        $teamCompany->save();
        return redirect('teamCompany/index')->with('message','Added successfully');
    }
    ////Team company info end////

    // Client Company start//
    public function clientCompany_index()
    {
        $clientCompany = ClientCompany::get();

        return view('Admin.AboutUs.client_company.index',compact('clientCompany'));
    }
    public function clientCompany_create()
    {
        return view('Admin.AboutUs.client_company.add');
    }
    public function storeclientcompany(Request $request)
    {
        //store in the database
        $clientCompany = new ClientCompany;
        
    
        $clientCompany->client_company_title = $request->client_company_title;
        $clientCompany->client_company_description = $request->client_company_description;
    
            if($file =$request->file("client_company_image"))
            {
                $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/Aboutus/clientCompany/',$uniqename);
                $clientCompany->client_company_image = $ImgPath;
            }
         
        $clientCompany->save();
        return redirect('clientCompany/index')->with('message','Added successfully');
    }
    // Client Company end//

}
