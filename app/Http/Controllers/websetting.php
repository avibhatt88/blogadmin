<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\websettingm;


class websetting extends Controller
{

     
    public function index()
    {
        $websettings = websettingm::latest()->paginate(20);
        return view('backend.websetting',compact('websettings'));
    }

    public function create()
    {
        return view('backend.websetting');
    }
    public function store(Request $request)
    {    
       
        $imageName = time().'.'.$request->logo->extension();
        $imageName1 = time().'.'.$request->favicon->extension();
        
        $request->logo->move(public_path('images'), $imageName);  
        $request->favicon->move(public_path('images'), $imageName1);  

        websettingm::insert([
            'site_title'=> $request->site_title,
            'description'=> $request->description,
            'keywords'=> $request->keywords,
            'logo'=> 'images/'.$imageName,
            'favicon'=> 'images/'.$imageName1,
            'header_script'=> $request->header_script,
            'footer_script'=> $request->footer_script,

        ]);
        return redirect()->route('indexpage');        
    }
    public function show($id)
    {
        $item = websettingm::find($id);
        return view('backend.edit',compact('item'));
    } 
    public function edit()
    {
        $item = websettingm::first(); 
        return view('backend.edit',compact('item'));
    }
    public function update(Request $request)
    {

        $blog = websettingm::first();
        $blog = $blog == null ? new websettingm: $blog;
        if($request->file('logo')){
            $imageName = time().'logo.'.$request->logo->extension();
            $request->logo->move(public_path('images'), $imageName);  
            $blog->logo = 'images/'.$imageName;
        }

        if($request->file('favicon')){
            $imageName1 = time().'favicon.'.$request->favicon->extension();
            $request->favicon->move(public_path('images'), $imageName1);  
            $blog->favicon = 'images/'.$imageName1;
        }

        $blog->site_title = $request->site_title;
        $blog->description = $request->description;
        $blog->keywords = $request->keywords;
        $blog->header_script = $request->header_script;
        $blog->footer_script = $request->footer_script;
        $blog->save();

        return redirect()->route('editdata');
    }
    public function destroy($id)
    {
        websettingm::find($id)->delete();
        return redirect()->route('indexpage');
    }
}
