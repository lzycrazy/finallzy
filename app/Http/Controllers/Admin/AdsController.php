<?php

namespace App\Http\Controllers\Admin;
use App\Models\MarketAds;
use App\Models\FashionAds;
use App\Models\HomeessentailAds;
use App\Models\VehicleAds;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index()
    {

        return view('Admin.MarketAds.add');
    }

    public function store(Request $request)
    {


             $request->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);
     
     //print_r($request->all());die();
         //store in the database
          $Ads = new MarketAds;
         if($file =$request->file("banner"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/adsimage/',$uniqename);
                $Ads->banner = $ImgPath;
             }

         if($file =$request->file("image"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/adsimage/',$uniqename);
                $Ads->image = $ImgPath;
             }


       $file=$request->file('video');
       $file->move('upload/adsvedio/',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();
         
        $Ads->video = $file_name;
         //     }
         $Ads->save();
         return redirect('marketsads')->with('message','Added successfully');
    }

     public function ads()
    {
       $ads=MarketAds::get();

        $id=1;
        return view('Admin.MarketAds.list',compact('ads','id'));
    }



    ///////////////////////Vehicles ads //////////////////////////////////


    public function vehicles()
    {

        return view('Admin.VehiclesAds.add');
    }

    public function storevehiclesads(Request $request)
    {


             $request->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);
     
     //print_r($request->all());die();
         //store in the database
          $Ads = new VehicleAds;
         if($file =$request->file("banner"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/image/',$uniqename);
                $Ads->banner = $ImgPath;
             }

         if($file =$request->file("image"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/image/',$uniqename);
                $Ads->image = $ImgPath;
             }


       $file=$request->file('video');
       $file->move('upload/adsvedio/',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();
         
        $Ads->video = $file_name;
         //     }
         $Ads->save();
         return redirect('vehiclesads')->with('message','Added successfully');
    }

     public function vehiclesads()
    {
       $ads=VehicleAds::get();

        $id=1;
        return view('Admin.VehiclesAds.list',compact('ads','id'));
    }

    /////////////////////////Fashion ads///////////////////////////


    public function fashion()
    {

        return view('Admin.FashionAds.add');
    }

    public function storefashionads(Request $request)
    {


             $request->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);
     
     //print_r($request->all());die();
         //store in the database
          $Ads = new FashionAds;
         if($file =$request->file("banner"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/image/',$uniqename);
                $Ads->banner = $ImgPath;
             }

         if($file =$request->file("image"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/image/',$uniqename);
                $Ads->image = $ImgPath;
             }


       $file=$request->file('video');
       $file->move('upload/adsvedio/',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();
         
        $Ads->video = $file_name;
         //     }
         $Ads->save();
         return redirect('fashionads')->with('message','Added successfully');
    }

     public function fashionads()
    {
       $ads=FashionAds::get();

        $id=1;
        return view('Admin.FashionAds.list',compact('ads','id'));
    }


    /////////////////////////Home essetails//////////////////////////


    public function homeessentials()
    {

        return view('Admin.HomeessentialsAds.add');
    }

    public function storehomeessentials(Request $request)
    {


             $request->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);
     
     //print_r($request->all());die();
         //store in the database
          $Ads = new HomeessentailAds;
         if($file =$request->file("banner"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/image/',$uniqename);
                $Ads->banner = $ImgPath;
             }

         if($file =$request->file("image"))
             {
                    $nam =$file->getClientOriginalName();
                $uniqename  =uniqid($nam);
                $ImgPath        = $file->move('upload/image/',$uniqename);
                $Ads->image = $ImgPath;
             }


       $file=$request->file('video');
       $file->move('upload/adsvedio/',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();
         
        $Ads->video = $file_name;
         //     }
         $Ads->save();
         return redirect('homeessentialsads')->with('message','Added successfully');
    }

     public function homeessentialsads()
    {
       $ads=HomeessentailAds::get();

        $id=1;
        return view('Admin.HomeessentialsAds.list',compact('ads','id'));
    }
}
