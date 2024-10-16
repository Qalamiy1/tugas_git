<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
  public function blog(){
    $blogs=Blogs::Get();
    return view('backend.blogs.index',[
      'Callblog'=>$blogs,
    ]);
  }
}
