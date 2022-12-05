/*const { any } = require("micromatch"); */

$(document).ready(function () {
    $('.carousel__inner').slick({
        dots: false,
        slidesToShow: 1,
        speed: 1200,
        prevArrow: false,
        adaptiveHeight: true,
        nextArrow: '<button type="button" class="slick-next"><img src="./icons/ic_arrowright.svg"></button>',
    });

    if (/Android/i.test(navigator.userAgent)) {
        console.log("Вы используете android");
        $('.promo_link').attr('href', 'https://play.google.com/store/apps/details?id=ibusiness.asia');
    } else if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        console.log("Вы используете apple");
        console.log(navigator.userAgent);
    } else {
        console.log("Вы используете ПК.");
        $('.promo_link').attr('href', 'https://app.mypage.kz/login');
    }

    $(".navbar__link_animate").click(function (event) {
        event.preventDefault();
        var block = $(this).attr('href');
        console.log(block);
       var top = $(block).offset().top;
        console.log(top);
        $('body,html').animate({scrollTop: top}, 1000);
       });
});


//active

var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


//
let url = window.location.pathname;
var current;
if(url.includes("home-kz")){
    $(".link-kz").addClass("active");
}else{
    $(".link-ru").addClass("active");
}


