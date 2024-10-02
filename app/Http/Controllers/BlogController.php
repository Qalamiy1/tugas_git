<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogterbaru=Blogs::orderby('id','desc')->limit(3)->get();
        $semuaterbaru=Blogs::orderby('id','desc')->get();
        $blogterlama=Blogs::orderby('id','asc')->get();
        return view('blog',[
            'tampilterbaru'=>$blogterbaru,
            'tampilbarusemua'=>$semuaterbaru,
            'tampilterlama'=>$blogterlama,  
        ]);
    }

    public function blog_detail (){
        
        return view('blog_detail');
    }
}
