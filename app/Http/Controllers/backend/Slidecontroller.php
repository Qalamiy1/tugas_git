<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;

class Slidecontroller extends Controller
{
    public function slider(){
        $sliders=Sliders::Get();
        return view('backend.sliders.index',[
            'Callslider'=>$sliders,
        ]);
    }
}
