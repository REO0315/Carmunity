<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class TopController extends Controller
{
    //
    public function index() {
        $posts =  Post::where('user_id',Auth::id())->get();
        
        return view('toppage',compact('posts'));
    }
    
    
    public function edit(){
        
        return view('layouts/profile-edit');
    }
    
}
