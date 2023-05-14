<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categorycontroller extends Controller
{
   
    public function index()
    {
        $categorys = category::paginate(20);
        return view('backend.category.index',compact('categorys'));
    }

    public function create()
    {
        return view('backend.category.create');
    }
    public function store(Request $request)
    {    
       
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);  

        category::insert([
            'title'=> $request->title,
            'description'=> $request->description,

        ]);
        return redirect()->route('categoryindex');        
    }
    
    // public function show($id)
    // {
    //     $item = Post::find($id);
    //     return view('auth.backend.edit',compact('item'));
    // } 

    
    // public function edit($item)
    // {
    //     $item =category::find($item); 
    //     return view('auth.backend.category.edit',compact('item'));
    // }

    // public function update(Request $request)
    // {
        
    //     $blog =category::first();
    //     $blog = $blog == null ? new category: $blog;
        

    //     $blog->title = $request->title;
    //     $blog->description = $request->description;
    //     $blog->save();

    //     return redirect()->route('categoryindex');
    // }

    public function edit($item)
    {
        $item =  category::find($item);
        $categorys = category::all();   
        return view('backend.category.edit',compact('item','categorys'));
    }   
    public function update(Request $request)
    {

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);  

        category::where('id', $request->id)->update([   
            'title' => $request->title,
            'description'=> $request->description,
        ]);
        return redirect()->route('categoryindex');
    }
    public function destroy($id)
    {
        category::find($id)->delete();
        return redirect()->route('categoryindex');
    }
}
