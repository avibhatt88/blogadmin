<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\profile;


class profileController extends Controller
{
    
    public function index()
    {
        $profile = profile::latest()->paginate(20);
        return view('backend.Profile.profile',compact('profile'));
    }

    public function create()
    {
        return view('backend.Profile.profile');
    }
    public function store(Request $request)
    {    
       
        $imageName = time().'.'.$request->profilepic->extension();
        
        $request->profilepic->move(public_path('images'), $imageName);  

        profile::insert([
            'username'=> $request->username,
            'name'=> $request->name,
            'email'=> $request->email,
            'profilepic'=> 'images/'.$imageName,
            'password'=> \Hash::make($request->password),

        ]);
        return redirect()->route('indexpageprofile');        
    }
    // public function show($id)
    // {
    //     $item = profile::find($id);
    //     return view('backend.edit',compact('item'));
    // } 
    public function edit()
    {
        $item = profile::first(); 
        return view('backend.Profile.profile',compact('item'));
    }
    public function update(Request $request)
    {

        $blog = profile::first();
        $blog = $blog == null ? new profile: $blog;
        if($request->file('profilepic')){
            $imageName = time().'profilepic.'.$request->profilepic->extension();
            $request->profilepic->move(public_path('images'), $imageName);  
            $blog->profilepic = 'images/'.$imageName;
        }

        $blog->username = $request->username;
        $blog->name = $request->name;
        $blog->email = $request->email;
        $blog->password = \Hash::make($request->password);
        $blog->save();

        return redirect()->route('edituserprofile');
    }
    public function destroy($id)
    {
        profile::find($id)->delete();
        return redirect()->route('indexpageprofile');
    }
}
