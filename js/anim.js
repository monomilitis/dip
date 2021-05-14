$(function () {
	$(window).scroll(function() {
	    $('.aboutus').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("fadeInLeft");
	        }
	    });
	    $('.ustext').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("fadeInLeft");
	        }
	    });
	    $('.umshktxt').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("fadeIn");
	        }
	    });

	    $('.simg').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("fadeIn");
	        }
	    });

	    $('.umhousetxt').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("fadeIn");
	        }
	    });

	    $('.cart1').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("fadeInLeft");
	        }
	    });

	    $('.cart2').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("fadeInRight");
	        }
	    });

	    $('.footer').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+1000) {
	            $(this).addClass("fadeInUp");
	        }
	    });
	});
});

$(function(){

$('.CTA').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('.y').offset().top }, 1000);
  e.preventDefault();
});

});

$(function(){

$('.footpic').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('.head').offset().top }, 1000);
  e.preventDefault();
});

});

