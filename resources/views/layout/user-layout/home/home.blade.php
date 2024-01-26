@extends('layout.user-layout.main')
@section('content')

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner p-2" style="max-height: 650px;">
        <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/235294/pexels-photo-235294.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/322207/pexels-photo-322207.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/607812/pexels-photo-607812.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container-fluid mt-5 w-full">
    <div data-aos="zoom-in" data-aos-offset="200">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row justify-content-between">
            <li>
                <a class="nav-link text-uppercase fs-5 fw-bold " aria-current="page" href="#">Latest Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase fs-7 fw-bold" href="/products">See all<i class="bi bi-arrow-right"></i></a>
            </li>
        </ul>
    </div>
</div>



<div class="row m-1">
    @foreach($product as $p)
    <div class="col-2 ">
        <div class="card">
            <img src="{{$p->image}}" width="20%" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> Product Name-{{$p->name}}</h5>
                <p class="card-text"> Stock-{{$p->stock}}</p>
                <p class="card-text"> Price-{{$p->price}}$</p>

                <p class="card-text"> Description-{{$p->description}}</p>
                <a href="/viewproduct/{{$p->id}}" class="btn btn-primary">View product</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container-fluid mt-5 w-full">
        <div data-aos="zoom-in" data-aos-offset="200">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row justify-content-between">
                <li>
                    <a class="nav-link text-uppercase fs-5 fw-bold " aria-current="page" href="#">Trending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase fs-7 fw-bold" href="/products">See all<i class="bi bi-arrow-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row m-1">
        @foreach($product as $p)
        <div class="col-2 ">
            <div class="card">
                <img src="{{$p->image}}" width="20%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Product Name-{{$p->name}}</h5>
                    <p class="card-text"> Stock-{{$p->stock}}</p>
                    <p class="card-text"> Price-{{$p->price}}$</p>

                    <p class="card-text"> Description-{{$p->description}}</p>
                    <a href="/viewproduct/{{$p->id}}" class="btn btn-primary">View product</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="container-fluid mt-5 w-full">
        <div data-aos="zoom-in" data-aos-offset="200">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row justify-content-between">
                <li>
                    <a class="nav-link text-uppercase fs-5 fw-bold " aria-current="page" href="#">For You</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase fs-7 fw-bold" href="/products">See all<i class="bi bi-arrow-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row m-1">
        @foreach($product as $p)
        <div class="col-2 ">
            <div class="card">
                <img src="{{$p->image}}" width="20%" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Product Name-{{$p->name}}</h5>
                    <p class="card-text"> Stock-{{$p->stock}}</p>
                    <p class="card-text"> Price-{{$p->price}}$</p>

                    <p class="card-text"> Description-{{$p->description}}</p>
                    <a href="/viewproduct/{{$p->id}}" class="btn btn-primary">View product</a>
                </div>
            </div>
        </div>
        @endforeach

        @endsection