$(document).ready(function(){
	$(window).scroll(function(){
  	var light_pos = $('.section-two').offset().top;
    var light_height = $('.darklight').height();
    var menu_pos = $('.header__menu').offset().top;
    var menu_height = $('.header__menu').height();
    var scroll = $(window).scrollTop();
    console.log('light',light_pos);
    console.log('menu',menu_pos);
    console.log('scroll',scroll);

    if(menu_pos > light_pos && menu_pos < (light_pos + light_height)) {
    	$('.header__menu').addClass('header__colour--black');
			$('.header__menu--hr').addClass('header__hr--black');
      $('.header__menu').removeClass('header__colour--white');
			$('.header__menu--hr').removeClass('header__hr--white');
    }
    else {
    	$('.header__menu').removeClass('header__colour--black');
			$('.header__menu--hr').removeClass('header__hr--black');
      $('.header__menu').addClass('header__colour--white');
			$('.header__menu--hr').addClass('header__hr--white');
    }
  })
})

function openNav() {
  document.getElementById("nav").style.width = "100%";
}

function closeNav() {
  document.getElementById("nav").style.width = "0%";
}
