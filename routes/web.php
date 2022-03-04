<?php

use App\Http\Controllers\ProfileController;

///////////////////////Admin Controller///////////////////////
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\AdsController;

///////////////////////User Controller/////////////////
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\MarketController;
use App\Http\Controllers\User\PhoneController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/home',[UserController::class, 'index'])->middleware(['auth','verified'])->name('home');
Route::get('/usermaster',[UserController::class, 'usermaster'])->middleware(['auth','verified'])->name('usermaster');
Route::post('/getsubcate',[UserController::class, 'getsubcate'])->middleware(['auth','verified'])->name('getsubcate');
 



Route::get('/setting', function () {
    return view('setting');
})->middleware(['auth','verified'])->name('setting');

Route::get('profile', [ProfileController::class, 'index'])->middleware(['auth','verified'])->name('profile');

require __DIR__.'/auth.php';

//////////////////////User Dashboard/////////////////////////////////
Route::get('market', [MarketController::class, 'index'])->middleware(['auth','verified'])->name('market');

Route::get('phone/{id}', [PhoneController::class, 'phone'])->middleware(['auth','verified'])->name('phone');



//////////////////////Admin Dashboard/////////////////////////////////

Route::get('/admin.dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//////////////////////Category /////////////////////////////////

    Route::get('/add_category',[CategoryController::class,'index'])->name('add_category');
    Route::post('/storecategory',[CategoryController::class,'storecategory'])->name('storecategory');
    Route::get('/category',[CategoryController::class,'category'])->name('category');
    Route::get('/editcategory/{id}', [CategoryController::class, 'edit']);
    Route::post('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('/delete_category/{id}', [CategoryController::class, 'delete']);
    Route::get('/deleteRevokecategory/{id}', [CategoryController::class, 'deleteRevoke']);
    Route::get('/deletePermanentcategory/{id}', [CategoryController::class, 'deletePermanent']);

    // show all inactive Category
    Route::get('/deactive_category/{id}', [CategoryController::class, 'deactive_category'])->name('deactive_category');
    // show all active Category
    Route::get('/active_category/{id}', [CategoryController::class, 'active_category'])->name('active_category');
//////////////////////End Category /////////////////////////////////

//////////////////////Sub Category /////////////////////////////////
    Route::get('/addsubcategory',[CategoryController::class,'addsubcategory'])->name('add_subcategory');
    Route::post('/storesubcategory',[CategoryController::class,'storesubcategory'])->name('storesubcategory');
    Route::get('/subcategory',[CategoryController::class,'subcategory'])->name('subcategory');
    Route::get('/editsubcategory/{id}', [CategoryController::class, 'editsubcategory']);
    Route::post('update-subcategory/{id}', [CategoryController::class, 'updatesubcategory']);
    Route::get('/delete_subcategory/{id}', [CategoryController::class, 'deletesubcategory']);
    Route::get('/deleteRevokesubcategory/{id}', [CategoryController::class, 'deleteRevokesubcategory']);
    Route::get('/deletePermanentsubcategory/{id}', [CategoryController::class, 'deletePermanentsubcategory']);

    // show all inactive Category
    Route::get('/deactive_subcategory/{id}', [CategoryController::class, 'deactive_subcategory'])->name('deactive_subcategory');
    // show all active Category
    Route::get('/active_subcategory/{id}', [CategoryController::class, 'active_subcategory'])->name('active_subcategory');


//////////////////////End Sub Category /////////////////////////////////

  
//////////////////////Brand /////////////////////////////////

Route::get('/brand',[BrandController::class,'brand'])->name('brand');

    Route::get('/add_brand',[BrandController::class,'add_brand'])->name('add_brand');
    //Route::post('/storebrand',[BrandController::class,'store_brand'])->name('store_brand');
    Route::post('/getsubcategory',[BrandController::class,'getsubcategoryy'])->name('getsubcategory');
    Route::post('/send_data',[BrandController::class,'store_brand'])->name('send_data');

//////////////////////End Brand /////////////////////////////////

//////////////////////Brand Details /////////////////////////////////
    Route::get('/add_branddetails',[BrandController::class,'index'])->name('add_branddetails');
    Route::post('/categoryid', [BrandController::class, 'getsubcategory'])->name('categoryid');
    Route::post('/brandid', [BrandController::class, 'getbrand'])->name('brandid');
    Route::post('/storebranddetails',[BrandController::class,'storebranddetails'])->name('storebranddetails');
    Route::get('/branddetails',[BrandController::class,'branddetails'])->name('branddetails');



//////////////////////End Brand Details/////////////////////////////////


//////////////////////Brand Accessory /////////////////////////////////



//////////////////////End Brand Accessory/////////////////////////////////


////////////////////////Markets Ads/////////////////////////////////
    Route::get('/add_ads',[AdsController::class,'index'])->name('add_ads');
    Route::post('/store',[AdsController::class,'store'])->name('store');
    Route::get('/marketsads',[AdsController::class,'ads'])->name('marketsads');
//////////////////////////Markets Ads///////////////////////////////////

    ////////////////////////Vehicles Ads/////////////////////////////////
    Route::get('/add_vehiclesads',[AdsController::class,'vehicles'])->name('add_vehiclesads');
    Route::post('/storevehiclesads',[AdsController::class,'storevehiclesads'])->name('storevehiclesads');
    Route::get('/vehiclesads',[AdsController::class,'vehiclesads'])->name('vehiclesads');
//////////////////////////Vehicles Ads///////////////////////////////////

    ////////////////////////Fashion Ads/////////////////////////////////
    Route::get('/add_fashionads',[AdsController::class,'fashion'])->name('add_fashionads');
    Route::post('/storefashionads',[AdsController::class,'storefashionads'])->name('storefashionads');
    Route::get('/fashionads',[AdsController::class,'fashionads'])->name('fashionads');
//////////////////////////Fashion Ads///////////////////////////////////

    ////////////////////////Home Essentails Ads/////////////////////////////////
    Route::get('/add_homeessentials',[AdsController::class,'homeessentials'])->name('add_homeessentialsads');
    Route::post('/storehomeessentials',[AdsController::class,'storehomeessentials'])->name('storehomeessentials');
    Route::get('/homeessentialsads',[AdsController::class,'homeessentialsads'])->name('homeessentialsads');
//////////////////////////Home Essentails Ads///////////////////////////////////


    ///////////////// About Us start ///////////////

    ////banner video start////
    Route::get('/bannervideo/index',[AboutUsController::class,'index'])->name('bannervideo');
    Route::get('/add_bannervideo',[AboutUsController::class,'create'])->name('add_bannervideo');
    Route::post('/storebannervideo',[AboutUsController::class,'storebannervideo'])->name('storebannervideo');

    // Route::get('/editcategory/{id}', [CategoryController::class, 'edit']);
    // Route::post('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('/delete_bannerVideo/{id}', [AboutUsController::class, 'delete']);
    Route::get('/deleteRevokebannerVideo/{id}', [AboutUsController::class, 'deleteRevoke']);
    Route::get('/deletePermanentbannerVideo/{id}', [AboutUsController::class, 'deletePermanent']);

    // // show all inactive Category
    Route::get('/deactive_bannerVideo/{id}', [AboutUsController::class, 'deactive_bannerVideo'])->name('deactive_bannerVideo');
    // // show all active Category
    Route::get('/active_bannerVideo/{id}', [AboutUsController::class, 'active_bannerVideo'])->name('active_bannerVideo');

    ////banner video end////
    
    ////blog start////
    Route::get('/blog/index',[AboutUsController::class,'blog_index'])->name('blog');
    Route::get('/add_blog',[AboutUsController::class,'blog_create'])->name('add_blog');
    Route::post('/storeblog',[AboutUsController::class,'storeblog'])->name('storeblog');
    ////blog end////

    ////vision strat////
    Route::get('/vision/index',[AboutUsController::class,'vision_index'])->name('vision');
    Route::get('/add_vision',[AboutUsController::class,'vision_create'])->name('add_visionCompany');
    Route::post('/storevision',[AboutUsController::class,'storevision'])->name('storevisioncompany');
    ////vision end////

    ////people strat////
    Route::get('/people/index',[AboutUsController::class,'people_index'])->name('people');
    Route::get('/add_people',[AboutUsController::class,'people_create'])->name('add_peopleCompany');
    Route::post('/storepeople',[AboutUsController::class,'storepeople'])->name('storepeople');
    ////people end////

    ////Banner company info start////
    Route::get('/bannerCompany/index',[AboutUsController::class,'bannerCompany_index'])->name('banner_company');
    Route::get('/add_bannerCompany',[AboutUsController::class,'bannerCompany_create'])->name('add_bannerCompany');
    Route::post('/storebannercompany',[AboutUsController::class,'storebannercompany'])->name('storebannercompany');
    ////Banner company info end////

    ////About company info start////
    Route::get('/aboutCompany/index',[AboutUsController::class,'aboutCompany_index'])->name('about_company');
    Route::get('/add_aboutCompany',[AboutUsController::class,'aboutCompany_create'])->name('add_aboutCompany');
    Route::post('/storeaboutcompany',[AboutUsController::class,'storeaboutcompany'])->name('storeaboutcompany');
    ////About company info end////

    ////Team company info start////
    Route::get('/teamCompany/index',[AboutUsController::class,'teamCompany_index'])->name('team_company');
    Route::get('/add_teamCompany',[AboutUsController::class,'teamCompany_create'])->name('add_teamCompany');
    Route::post('/storeteamcompany',[AboutUsController::class,'storeteamcompany'])->name('storeteamcompany');
    ////Team company info end////

     ////client company info start////
    Route::get('/clientCompany/index',[AboutUsController::class,'clientCompany_index'])->name('client_company');
    Route::get('/add_clientCompany',[AboutUsController::class,'clientCompany_create'])->name('add_clientCompany');
    Route::post('/storeclientcompany',[AboutUsController::class,'storeclientcompany'])->name('storeclientcompany');
    ////client company info end////


    ///////////////// About Us end//////////////////



