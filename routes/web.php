<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\websetting;
use App\Http\Controllers\profileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('web.index');
// });


Route::get('/', [Homecontroller::class, 'index'])->name('index');
Route::get('About/', [Homecontroller::class, 'about'])->name('aboutus');
Route::get('contact/', [Homecontroller::class, 'contact'])->name('contactus');
// Route::get('/newpost', [Homecontroller::class, 'post'])->name('post');
// Route::get('/home', [Homecontroller::class, 'index'])->name('index');
Route::get('/post/{post_slug}', [Homecontroller::class,'viewPost']);
                                                                                                            

    Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->middleware('throttle:2,1');
    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->middleware('throttle:2,1');
    
});

    Route::group(['middleware'=>'auth'],function(){
    Route::get('admin',[AuthController::class,'admin'])->name('admin');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');


    Route::get('insertdata',[websetting::class,'index'])->name('indexpage');
    Route::get('create',[websetting::class,'create'])->name('createdata');
    Route::POST('settingstore',[websetting::class,'store'])->name('storedata');
    Route::get('editdata',[websetting::class,'edit'])->name('editdata');
    Route::get('deletedata/{id}',[websetting::class,'destroy'])->name('deletedata');
    Route::Post('updatedata',[websetting::class,'update'])->name('updatedata');

    Route::get('insertname',[profileController::class,'index'])->name('indexpageprofile');
    Route::get('createprofile',[profileController::class,'create'])->name('createuserprofile');
    Route::POST('profilestore',[profileController::class,'store'])->name('storeuserprofile');
    Route::get('editprofile',[profileController::class,'edit'])->name('edituserprofile');
    Route::get('deleteprofile/{id}',[profileController::class,'destroy'])->name('deleteuserprofile');
    Route::Post('updateprofile',[profileController::class,'update'])->name('updateuserprofile');

    Route::get('indexpost',[postController::class,'index'])->name('postindex');
    Route::get('createpost',[postController::class,'create'])->name('postcreate');
    Route::POST('poststore',[postController::class,'store'])->name('storepost');
    Route::get('editpost/{id}',[postController::class,'edit'])->name('editpost');
    Route::POST('updatepost/{id}',[postController::class,'update'])->name('updatepost');
    Route::get('deletepost/{id}',[postController::class,'destroy'])->name('deletepost');

    Route::get('indexcategory',[categorycontroller::class,'index'])->name('categoryindex');
    Route::get('createcategory',[categorycontroller::class,'create'])->name('categorycreate');
    Route::POST('categorystore',[categorycontroller::class,'store'])->name('categorystore');
    Route::get('editcategory/{id}',[categorycontroller::class,'edit'])->name('editcategory');
    Route::POST('updatecategory/{id}',[categorycontroller::class,'update'])->name('updatecategory');
    Route::get('deletecategory/{id}',[categorycontroller::class,'destroy'])->name('deletecategory');

    
});

   




