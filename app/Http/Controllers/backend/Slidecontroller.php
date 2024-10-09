<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Slidecontroller extends Controller
{
    public function slider(){
        return view('backend.sliders.index');
    }
}
