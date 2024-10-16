<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Service;
use Illuminate\Http\Request;

class Servicecontroller extends Controller
{
   public function service(){
      $services=Service::Get();
    return view('backend.services.index',[
      'Callservice'=>$services,
    ]);
   }
}
