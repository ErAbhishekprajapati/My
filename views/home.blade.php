@extends('layouts.app')

<!-- @section('head') -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
@endsection

@section('content')
<div class="container mt-4">
    <!-- Bootstrap Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/1.png') }}" class="d-block w-100" alt="..." style="width: 100%; height: 300px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/13.png') }}" class="d-block w-100" alt="..." style="width: 100%; height: 300px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/11.png') }}" class="d-block w-100" alt="..." style="width: 100%; height: 300px; object-fit: cover;">
            </div>
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
</div>

<h2 class="text-center">My Selected Students in Top Companies</h2>
<div class="container mt-4">
    <div class="scrolling-bar">
        <div class="scrolling-text">
            <!-- Abhishek at Google -->
            <div class="student-item">
                <img src="{{ asset('images/s1.jpg') }}" class="student-photo" alt="Abhishek">
                <img src="{{ asset('images/rmsi.JPG') }}" class="company-logo" alt="Google Logo">
                <span><b>Abhishek at Rmsi 7.0 LPA</b></span>
            </div>
            <!-- Priya at Amazon -->
            <div class="student-item">
                <img src="{{ asset('images/mahendrapic1.jpg') }}" class="student-photo" alt="Priya">
                <img src="{{ asset('images/google.JPG') }}" class="company-logo" alt="Amazon Logo">
                <span><b>Mahendra at Amazon 10.0 LPA</b> </span>
            </div>
            <!-- Ravi at Microsoft -->
            <div class="student-item">
                <img src="{{ asset('images/s1.jpg') }}" class="student-photo" alt="Ravi">
                <img src="{{ asset('images/tesla.JPG') }}" class="company-logo" alt="Microsoft Logo">
                <span><b>Ravi at Tesla 12.0 LPA</b></span>
            </div>
            <!-- Neha at Apple -->
            <div class="student-item">
                <img src="{{ asset('images/s1.jpg') }}" class="student-photo" alt="Neha">
                <img src="{{ asset('images/amazon.JPG') }}" class="company-logo" alt="Apple Logo">
                <span><b>Neha at Apple 6.0 LPA </b></span>
            </div>
        </div>
    </div>
</div>
<div>
     <!-- Include Footer -->
 @include('layouts.footer')
</div>

@endsection
