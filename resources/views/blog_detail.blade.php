@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
  .img1{
    width: 100%;
    border-radius: 10px;
  }
  .img2{
    width: 100%;
    
  }
</style>
<body>

    <div class="container">

        <!-- content disini  -->
          <div class="row">
            <div class="col-lg-8 border border-start p-5">
               <img class="img1 " src="img/img1.png" alt="">
              <h1>Cara membuat Website sederhana dengan Html dan CSS only </h1>
              <span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, corrupti. Doloremque optio sint numquam tenetur officia iure, tempore eveniet exercitationem quisquam neque, omnis non voluptatibus tempora impedit eius. Officiis, animi reiciendis fugit labore perferendis nisi asperiores ipsum assumenda ab laudantium omnis, repellat voluptatem nihil. Ratione facilis, vero officia laborum iure accusamus quasi tempore quam assumenda architecto obcaecati eos fugit! Nulla voluptate maxime quisquam, illo soluta autem numquam delectus, ducimus tempore aliquam dolorem sapiente maiores fuga voluptatem blanditiis itaque distinctio dolores rem explicabo totam optio in quibusdam debitis magni. Aut, iste saepe tempora cum aliquid nihil nobis reprehenderit voluptatibus deserunt harum.
              </span>
            </div>
            <div class="col-lg-4 border border-start p-3">
                <h2>Blog terbaru </h2>
                <div class="row">
                <div class="col-lg-4 border border-start p-3">
                    <img class="img2" src="img/img1.png" alt="">
                </div>
                <div class="col-lg-8 border border-start p-3">
                    <h6>Bagaimana cara membuat website menggunakan Html dan CSS Only</h6>
                    <p>10/09/2024</p>
                </div>
                <div class="col-lg-4 border border-start p-3 ">
                  <img class="img2" src="img/img2.png" alt="">
                </div>
                <div class="col-lg-8 border border-start p-3">
                  <h6>Bagaimana cara membuat website menggunakan Html dan CSS Only</h6>
                  <p>10/09/2024</p>
                </div>
            </div>
            </div>
          </div>
        <!-- content sampai disini doang yah -->
    
@endsection