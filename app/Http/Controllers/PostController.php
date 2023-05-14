<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\category;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(20);
        return view('backend.posts.index',compact('posts'));
    }

    public function create()
    {   
        $categorys = category::all();
        return view('backend.posts.create',compact('categorys'));
    }
    public function store(Request $request)
    {    
        // dd($request->all());
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);  

        Post::insert([
            'title'=> $request->title,
            'description'=> $request->description,
            'keyword'=> $request->keyword,
            'slug'=> Str::slug($request->slug),
            'image'=> 'images/'.$imageName,
            'category_id'=> $request->category_id,

        ]);
        return redirect()->route('postindex');        
    }
    
    // public function show($id)
    // {
    //     $item = Post::find($id);
    //     return view('auth.backend.edit',compact('item'));
    //
    public function edit($item)
    {
        $item =  Post::find($item);
        $categorys = category::all();   
        return view('backend.posts.edit',compact('item','categorys'));
    }   
    public function update(Request $request)
    {

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);  

        Post::where('id', $request->id)->update([   
            'title' => $request->title,
            'description'=> $request->description,
            'keyword'=> $request->keyword,
            'slug'=> Str::slug($request->slug),
            'image'=> 'images/'.$imageName,
        ]);
        return redirect()->route('postindex');
    }

    
    // -----------------------------------------------------------------
    // public function edit($item)
    // {
    //     $item = Post::find($item); 
    //     $categorys = category::all();

            
    //     return view('auth.backend.posts.edit',compact('item','categorys'));
    // }

    // public function update(Request $request)
    // {

    //     $blog = Post::first();
    //     $blog = $blog == null ? new Post: $blog;
        
    //     if($request->file('image')){
    //         $imageName1 = time().'image.'.$request->image->extension();
    //         $request->image->move(public_path('images'), $imageName1);  
    //         $blog->image= 'images/'.$imageName1;
    //     }

    //     $blog->title = $request->title;
    //     $blog->description = $request->description;
    //     $blog->keyword = $request->keyword;
    //     $blog->slug = Str::slug($request->slug);
    //     $blog->save();

    //     return redirect()->route('postindex');
    // }


    // public function edit($item)
    // {
    //     $item = Post::find($item);
    //     return view('auth.backend.posts.edit',compact('item'));
    // }   
    // public function update(Request $request)
    // {
    //     $imageName = time().'.'.$request->image->extension();
    //     $request->image->move(public_path('images'), $imageName);  

    //     Post::where('id', $request->id)->update([
    //         'title'=> $request->title,
    //         'description'=> $request->description,
    //         'keyword'=> $request->keyword,
    //         'image'=> 'images/'.$imageName,
    //     ]);
    //     return redirect()->route('postindex');
    // }

    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('postindex');
    }
}
