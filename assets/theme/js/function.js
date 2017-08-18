
//more button
$('.more').click(function  () {
    $(this).css('display', 'none');
    bo = $(this).parent();
    bo.find('.reviews').css('white-space', 'normal');
});

var swiper = new Swiper('#popular .swiper-container', {
    paginationClickable: true,
    spaceBetween: 30,
    loop:true,
    autoplay: 5000,
});

if ($(window).innerWidth()<=360) {  
    var swiper = new Swiper('#document .swiper-container', {
        nextButton: '#document .swiper-button-next',
        prevButton: '#document .swiper-button-prev',
        slidesPerView:1,
        paginationClickable: true,
        spaceBetween: 30,
        autoplay: 7000,
    });
}else if($(window).innerWidth() >360 && $(window).innerWidth() <=480){
    var swiper = new Swiper('#document .swiper-container', {
        nextButton: '#document .swiper-button-next',
        prevButton: '#document .swiper-button-prev',
        slidesPerView:2,
        paginationClickable: true,
        spaceBetween: 30,
        autoplay: 7000,
    });
}else {
    var swiper = new Swiper('#document .swiper-container', {
        nextButton: '#document .swiper-button-next',
        prevButton: '#document .swiper-button-prev',
        slidesPerView:3,
        paginationClickable: true,
        spaceBetween: 30,
        autoplay: 7000,
    });
}



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
