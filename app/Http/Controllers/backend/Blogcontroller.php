<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
  public function blog(){
    return view('backend.blogs.index');
  }
}
