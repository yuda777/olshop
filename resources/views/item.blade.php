@extends('layouts.app')

@section('content')
<style>
    .carousel img {
        display: block;
        height: auto;
        width: 100%;
    }
    .carousel {
        height: 700px;
    }


    /* carousel height */
    @media screen and ( max-width: 768px ) {
        .carousel {
            height: 300px;
        }
    }
    /* cell inherit height from carousel */
    .carousel-cell {
        height: 100%;
    }

    /* @media screen and ( min-width: 768px ) {
        .carousel img {
            height: auto;
            width: 100%;
        }
    }

    .carousel-jumbotron{
        height: 700px;
    }


    @media screen and ( max-width: 767px ) {
        .carousel-jumbotron{
            height: 300px;
        }
    }

    @media screen and ( max-width: 767px ) {
        .carousel img {
            display: block;
            height: auto
            width: 100%;
        }
    } */

    .flickity-prev-next-button{
        display: none;
    }
    /* no circle */
    .flickity-button, .flickity-button:hover {
        background: transparent;
    }
    /* big previous & next buttons */
    .flickity-prev-next-button {
        width: 100px;
        height: 100px;
    }
    /* icon color */
        .flickity-button-icon {
        fill: white;
    }
    /* hide disabled button */
    .flickity-button:disabled {
        display: none;
    }

    .title-jumbotron {
        opacity: 0;
        transform: translate3d(0, 20px, 0);
        transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1) 0.45s,transform 0.6s cubic-bezier(0.4, 0, 0.2, 1) 0.45s;
        will-change: opacity, transform;
    }
    .text-on-jumbotron {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 100%;
    }

    .title-jumbotron {
        font-family: "Twentieth Century",sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 54px;
        color: #fff;
        cursor: default;
    }
    .button-jumbotron {
        cursor: grab;
    }
</style>
<div class="jumbotron jumbotron-fluid" style="padding: 0;">
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
            <img class="" src="{{ asset('storage/c2.webp') }}">
        </div>
        <div class="carousel-cell">
            <img class="" src="{{ asset('storage/c3.webp') }}">
        </div>
    </div>
    <h1 class="display-4 title-jumbotron" style="background-color: red;">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
</div>
<div class="container">
    <div class="row">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('items.show',$item->id) }}"><img class="card-img-top" src="{{ asset('storage/'.$item->photo_1) }}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('items.show',$item->id) }}">{{ $item->item_name }}</a>
                            </h4>
                            <h5>{{ $item->new_price }}</h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
</footer>
@endsection
