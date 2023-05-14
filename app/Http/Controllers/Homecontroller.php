<?php

namespace App\Http\Controllers;
use App\Models\websettingm;
use App\Models\Post;
use App\Models\category;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {

        $websettings = websettingm::where('status', '0')->first();
        $posts = Post::where('status', '0')->get();
        $categorys = category::where('status', '0')->get();
        // $posts = Post:: orderBy('status', 'desc')->take(5)->get();
        // orderBy('status', 'desc')->take(3)->get();
        return view('web.index', compact('websettings','posts','categorys'));
    }


    public function viewPost( string $slug)
    {
        
        {
            $websettings = websettingm::where('status', '0')->first();
            // $categorys = category::where('status', '0')->get();

            $posts = Post::where('slug',$slug)->where('status','0')->first();
            // $imageName = Post::where('status','0')->get();


            return view('web.viewpost',compact('posts','websettings'));
        }
           
    }

    public function about()
    {

        $websettings = websettingm::where('status', '0')->first();
        $posts = Post::where('status', '0')->get();
        $categorys = category::where('status', '0')->get();
        // $posts = Post:: orderBy('status', 'desc')->take(5)->get();
        // orderBy('status', 'desc')->take(3)->get();
        return view('web.about',compact( 'websettings','posts','categorys'));
    }


    public function contact()
    {
     
        $websettings = websettingm::where('status', '0')->first();
        $posts = Post::where('status', '0')->get();
        $categorys = category::where('status', '0')->get();
        return view('web.contact',compact('websettings','posts','categorys'));
    }
    
    
}
