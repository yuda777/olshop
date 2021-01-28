var $carouselNav = $('.carousel-nav');
var $carouselNavCells = $carouselNav.find('.carousel-cell');

$carouselNav.on( 'click', '.carousel-cell', function( event ) {
    var index = $( event.currentTarget ).index();
    console.log(index);
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

console.log("aqua");
