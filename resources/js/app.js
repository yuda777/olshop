const { Alert } = require('bootstrap');

require('./bootstrap');


window.closedrawer = function (event) {
    event.preventDefault();
    $("#main-header--mobile-nav").removeClass("active");
}

window.doingnothing = function(event) {
    event.preventDefault();
    $("#main-header--mobile-nav").addClass("active");
}

function okebos(){
    return 5;
}

var kijang1 = "kijang_1";
console.log(kijang1);

var yoker= "testvar";
