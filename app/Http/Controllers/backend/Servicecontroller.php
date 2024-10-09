<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Servicecontroller extends Controller
{
   public function service(){
    return view('backend.services.index');
   }
}
