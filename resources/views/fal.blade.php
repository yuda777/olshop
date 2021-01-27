<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="dns-prefetch" href="//font.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>olshop</title>
</head>
<body>
    <style>
        /* external css: flickity.css */

        * { box-sizing: border-box; }

        body { font-family: sans-serif; }

        .carousel-container {
        display: flex;
        }

        .carousel {
        background: #FAFAFA;
        margin-bottom: 40px;
        flex-grow: 1;
        }

        .carousel-cell {
        width: 66%;
        height: 300px;
        margin-right: 10px;
        background: #8C8;
        border-radius: 5px;
        counter-increment: carousel-cell;
        }

        /* cell number */
        .carousel-cell:before {
        display: block;
        text-align: center;
        content: counter(carousel-cell);
        line-height: 300px;
        font-size: 80px;
        color: white;
        }

        .carousel-nav {
        width: 120px;
        margin-left: 10px;
        max-height: 300px;
        overflow-y: scroll;
        }

        .carousel-nav .carousel-cell {
        height: 80px;
        width: 100px;
        margin: 0 0 5px 0;
        cursor: pointer;
        }

        .carousel-nav .carousel-cell:before {
        font-size: 50px;
        line-height: 80px;
        }

        .carousel-nav .carousel-cell.is-nav-selected {
        background: #ED2;
        }

    </style>
    <h1>Flickity - side vertical navigation</h1>

    <div class="carousel-container">
    <!-- Flickity HTML init -->
        <div class="carousel-nav">
            <div class="carousel-cell is-nav-selected"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
        </div>
        <div class="carousel carousel-main">
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
            <div class="carousel-cell"></div>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}" ></script>
    {{-- <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script> --}}
    <script>

        var $carouselNav = $('.carousel-nav');
        var $carouselNavCells = $carouselNav.find('.carousel-cell');


        $carouselNav.on( 'click', '.carousel-cell', function( event ) {
            var index = $( event.currentTarget ).index();
            console.log(index);
            //$carouselNav.flickity( 'select', index );
            // flkty.select( index );
            // var flkty = new Flickity( 'select', index );
        });


    </script>

</body>
</html>
