<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="dns-prefetch" href="//font.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Flickity</title>
</head>
<body>
    <h1>Flickity - side vertical navigation</h1>

    <div class="carousel-container">
        <div class="row">
            <div class="col-md-1">
                <div class="carousel-nav">
                    <div class="carousel-cell is-nav-selected">
                        <img class="img-caro img-thumb img-responsive fit-image" src="../storage/g1.webp">
                    </div>
                    <div class="carousel-cell">
                        <img class="img-caro img-thumb img-responsive fit-image"  src="../storage/g2.webp">
                    </div>
                    <div class="carousel-cell">
                        <img class="img-caro img-thumb img-responsive fit-image" src="../storage/g3.webp">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carousel carousel-main">
                    <div class="carousel-cell">
                        <img class="img-caro img-main img-responsive fit-image" src="../storage/g1.webp">
                    </div>
                    <div class="carousel-cell">
                        <img class="img-caro img-main img-responsive fit-image" src="../storage/g2.webp">
                    </div>
                    <div class="carousel-cell">
                        <img class="img-caro img-main" src="../storage/g3.webp">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" ></script>
    <script>
        var $carouselNav = $('.carousel-nav');
        var $carouselNavCells = $carouselNav.find('.carousel-cell');

        $carouselNav.on( 'click', '.carousel-cell', function( event ) {
            var index = $( event.currentTarget ).index();
            flkty.select( index );
        });

        // var flkty = flkty.data('flickity');
        var navTop  = $carouselNav.position().top;
        var navCellHeight = $carouselNavCells.height();
        var navHeight = $carouselNav.height();

        flkty.on( 'select', function(index) {
            console.log(index)
            $carouselNav.find('.is-nav-selected').removeClass('is-nav-selected');
            var $selected = $carouselNavCells.eq( index ).addClass('is-nav-selected');
            var scrollY = $selected.position().top +
            $carouselNav.scrollTop() - ( navHeight + navCellHeight ) / 2;
            $carouselNav.animate({
                scrollTop: scrollY
            });
        });

    </script>

</body>
</html>
