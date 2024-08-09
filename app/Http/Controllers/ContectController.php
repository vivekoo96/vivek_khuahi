<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ContectController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function blog_details(Request $request){
        $blog = Blog::where('slug', $request->slug)->first();
        return view('blog_details', compact('blog'));
    }

    public function privacy(Request $request){
        return view('privacy');
    }

    public function terms(Request $request){
        return view('terms');
    }
}
