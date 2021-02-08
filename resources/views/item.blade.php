@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" >
    <div class="carousel carousel-jumbotron">
        <div class="carousel-cell">
            <div class="text-on-jumbotron">
                <h2 class="title-jumbotron">SALE UP TO 60%</h2>
                <span class="button-jumbotron" href="/collections/sale">
                    shop now
                </span>
            </div>
            <img class="" src="{{ asset('storage/c1.webp') }}">
        </div>
        <div class="carousel-cell">
            <div class="text-on-jumbotron">
                <h2 class="title-jumbotron">SALE UP TO 60%</h2>
                <span class="button-jumbotron" href="/collections/sale">
                    shop now
                </span>
            </div>
            <img class="" src="{{ asset('storage/c2.webp') }}">
        </div>
        <div class="carousel-cell">
            <div class="text-on-jumbotron">
                <h2 class="title-jumbotron">SALE UP TO 60%</h2>
                <span class="button-jumbotron" href="/collections/sale">
                    shop now
                </span>
            </div>
            <img class="" src="{{ asset('storage/distro_cover.jpg') }}">
        </div>
    </div>
</div>
<div class="flex-container grid-container">
    @foreach ($items as $item)
        <div class="kolom-produk grid-div">
            <a class="link-produk" href="{{ route('items.show',$item->id) }}">
                <img class="card-img-top" src="{{ asset('storage/'.$item->photo_1) }}" alt="">
            </a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('items.show',$item->id) }}">{{ $item->item_name }}</a>
                </h4>
                <h5>{{ $item->new_price }}</h5>
                <p class="card-text"></p>
            </div>
        </div>
    @endforeach
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
    </div>
</footer>
@endsection
