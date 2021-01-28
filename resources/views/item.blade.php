@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="carousel jumbotron">
                <div class="carousel-cell">
                    <img class="img-fluid" src="{{ asset('storage/c1.webp') }}">
                </div>
                <div class="carousel-cell">
                    <img class="img-fluid" src="{{ asset('storage/c2.webp') }}">
                </div>
                <div class="carousel-cell">
                    <img class="img-fluid" src="{{ asset('storage/c3.webp') }}">
                </div>
            </div>

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
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
</footer>
@endsection
