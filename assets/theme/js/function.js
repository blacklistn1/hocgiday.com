
//more button
$('.more').click(function  () {
    console.log('fuck');
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

if ($(window).innerWidth()<=480) {  
    var swiper = new Swiper('#document .swiper-container', {
        nextButton: '#document .swiper-button-next',
        prevButton: '#document .swiper-button-prev',
        slidesPerView:1,
        paginationClickable: true,
        spaceBetween: 30,
        autoplay: 2500,
    });
}else{
    var swiper = new Swiper('#document .swiper-container', {
        nextButton: '#document .swiper-button-next',
        prevButton: '#document .swiper-button-prev',
        slidesPerView:3,
        paginationClickable: true,
        spaceBetween: 30,
        autoplay: 2500,
    });
}