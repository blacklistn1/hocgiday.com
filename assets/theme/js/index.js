
//CLICK SCROLL
locate= $('#options').offset().top - 114;
$('.instrument').click(function(){
	$('html,body').animate({scrollTop: locate}, 500);
});

//init wow plugin
new WOW().init();


