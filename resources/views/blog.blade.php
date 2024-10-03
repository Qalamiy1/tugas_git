@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<style>

.img1{
width: 100%;
border-radius: 10px;
}

.img2{
    width: 100%;
    border-radius: 10px;
    height: 70px;
}
.img3{
    width: 100%;
}
</style>


<body>
<div class="container">

 
        <!-- buat border disini -->
         <div class="row">
    @foreach($tampilbarusemua as $item)
            <div class="col-lg-8 border p-5"> 
                
                <div class="row">
                    <div class="col-lg-4 border mx-2 m-auto">
                        
                        <img src="{{$item->file}}" class="img1" alt="">

                    </div>
                    <div class="col-lg-7 border mx-2 m-auto ">
                        
                        <h6 class="atas">{{$item->title}}</h6>
                        <p >10 September 2024</p>
                        <a href="{{route('ke-blog_detail')}}">Read more</a>

                    </div>
                </div>             
                </div>  
                @endforeach
           
        <!-- disini blog yang kanan -->
         
             <div class="col-lg-4 border p-5"> 
                <h1>Blog terbaru</h1>
                <div class="row">
                @foreach($tampilterbaru as $item)
                    <div class="col-lg-3 border mt-2  m-auto">
                       <img src="{{$item->file}}" class="img2" alt="">
                    </div>
                    <div class="col-lg-9 border mt-2 m-auto ">
                        <h6>{{$item->title}}</h6>
                        <p>{{$item->created_at}}</p>
                    </div>
                    @endforeach
                </div>
             </div>
         </div>
       
        
         <!-- border yang untuk di atas  -->

          <h1>Blog laninya</h1>

          <div class="row">
            @foreach($tampilterlama as $item)
            <div class="col-lg-6 border p-5">
                col-6
                <div class="row">
                    <div class="col-lg-3 border mx-3 m-auto">
                    <img src="{{$item->file}}" class="img2" alt="">
                    </div>
                    <div class="col-lg-3 border mx-3 m-auto">
                        <h6>{{$item->title}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
</div>
   </div>
           @endsection