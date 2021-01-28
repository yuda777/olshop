/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Flickity = require('flickity');
window.flkty = new Flickity('.carousel');

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
