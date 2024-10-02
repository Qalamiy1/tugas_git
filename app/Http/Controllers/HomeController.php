<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Service;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders=Sliders::get();
        $blogs=Blogs::get();
        $services=Service::get();
        return view('home',[
            'panggilslider'=>$sliders,
            'panggilblog'=>$blogs,
            'panggilservice'=>$services
        ]);
    }
}
