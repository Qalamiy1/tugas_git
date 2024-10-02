@extends('layouts.master')

@section('content')

    <!-- slide untuk home -->
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach($panggilslider as $index => $item)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ $item->file }}" class="d-block h_slideers w-100" alt="...">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    
   
    <!-- layanan kami -->
    <div class="mx-auto mt-4" style="width: 200px;">
        <h2>Layanan kami</h2>
        <h3> إِنَّ اللَّهَ وَمَلائِكَتَهُ يُصَلُّونَ عَلَى النَّبِيِّ يَا أَيُّهَا الَّذِينَ آمَنُوا صَلُّوا عَلَيْهِ وَسَلِّمُوا تَسْلِيمًا</h3>
    </div>

    <div class="row">
        @foreach($panggilservice as $item)
        <div class="col-lg-4">
            
            <div class="card mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h3>{{ $item->title }}</h3>
                    <p class="card-text">{{ $item->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mx-auto mt-4" style="width: 200px;">
        <h3>Our Latest News</h3>
    </div>

    <div class="row mt-4">
        @foreach($panggilblog as $item)
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ $item->file }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- layanan akhir -->
@endsection
