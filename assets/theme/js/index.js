//MENU SCROLL
line1 = $('#header .line1').innerHeight();
line2 = $('#header .line2').innerHeight();
line3=line1 + line2;
$(window).scroll(function() {
	if ($('body').scrollTop() >= line3) {
		$('#header .line3').addClass('line3Appear');
	}else{
		$('#header .line3').removeClass('line3Appear');
	}
});

//CLICK SCROLL
locate= $('#options').offset().top -99;
$('.instrument').click(function(){
	$('body').animate({scrollTop: locate}, 500);
});


//init wow plugin
new WOW().init();



//more button
$('.more').click(function  () {
	$(this).css('display', 'none');
	bo = $(this).parent();
	bo.find('.reviews').css('white-space', 'normal');
});