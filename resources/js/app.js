/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('hooper-component', require('./components/Hooper.vue').default);

/**Component
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    data: {
        title: 'Laravel 8'
    }
});

window.closedrawer = function (event) {
    event.preventDefault();
    $("#main-header--mobile-nav").removeClass("active");
}

window.doingnothing = function (event) {
    event.preventDefault();
    $("#main-header--mobile-nav").addClass("active");
}

window.Flickity = require('flickity');
// flkty.resize()
// var flkty = flkty.data('flickity');
if($('.carousel-jumbotron').length){
    window.flkjumbotron = new Flickity('.carousel-jumbotron', {
        autoPlay: false,
        setGallerySize: false,
        resize: true,
        imagesLoaded: true
    });

    flkjumbotron.on( 'select', function(index) {
        const list = document.querySelectorAll('.text-on-jumbotron');
        for (var i = 0; i < list.length; ++i) {
            if ( index == i ){
                list[i].classList.add('animate');
            }else{
                list[i].classList.remove('animate');
            }
        }
        console.log(index);
    });

    window.onresize = function(event) {
        flkjumbotron.resize();
    };
}

if($('.carousel-priviewitem').length){
    window.flkpriviewitem = new Flickity('.carousel-priviewitem');
    var $carouselNav = $('.carousel-nav');
    var $carouselNavCells = $carouselNav.find('.carousel-cell');

    $carouselNav.on( 'click', '.carousel-cell', function( event ) {
        var index = $( event.currentTarget ).index();
        flkpriviewitem.select( index );
    });

    var navTop  = $carouselNav.position().top;
    var navCellHeight = $carouselNavCells.height();
    var navHeight = $carouselNav.height();

    flkpriviewitem.on( 'select', function(index) {
        console.log(index)
        $carouselNav.find('.is-nav-selected').removeClass('is-nav-selected');
        var $selected = $carouselNavCells.eq( index ).addClass('is-nav-selected');
        var scrollY = $selected.position().top +
        $carouselNav.scrollTop() - ( navHeight + navCellHeight ) / 2;
        $carouselNav.animate({
            scrollTop: scrollY
        });
    });
}

window.onload = function() {
    const list = document.querySelectorAll('.text-on-jumbotron');
    if(list[0]){
        list[0].classList.add('animate');
    }
    $('#loading').hide();
};
