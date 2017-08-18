
$pagination = $('#news .pagination ul li');
$pagination.click(function() {
    
    var order = $(this).index() - 1 ;
    var max = $pagination.length -4 ;
    var firstB = $('#news .pagination ul li.first');
    var prevB = $('#news .pagination ul li.prev');
    var nextB = $('#news .pagination ul li.next'); 
    var lastB = $('#news .pagination ul li.last'); 
    

    function firstItemsPick () {
        $('#news .pagination ul li.number').removeClass('appear');
        
        for (var i = 0 ; i < 3 ; i++) {
            var orderA = $('#news .pagination ul li.active').index() -1;
            orders = orderA +i +2;
            $('#news .pagination ul li.number:nth-child('+orders+')').addClass('appear');
        }
    }
    function lastItemsPick () {
        $('#news .pagination ul li.number').removeClass('appear');
        
        for (var i = -2 ; i < 1 ; i++) {
            var orderA = $('#news .pagination ul li.active').index() -1;
            orders = orderA -i;
            $('#news .pagination ul li.number:nth-child('+orders+')').addClass('appear');
        }
    }
    function middleITemsPick () {
        $('#news .pagination ul li.number').removeClass('appear');
        var orderA = $('#news .pagination ul li.active').index() -1;
        for (var i = -1; i < 2 ; i++) {
            orders = orderA +i +2;
            $('#news .pagination ul li:nth-child('+orders+')').addClass('appear');
        }
    } 
    //function for switch active
    var orderA = $('#news .pagination ul li.active').index();
    if ($(this).hasClass('direction')) {
        if ($(this).hasClass('next') && orderA ==8) {
            $pagination.removeClass('active');
            orderA = orderA +2;
            $('#news .pagination ul li:nth-child('+orderA+')').addClass('active');
            lastItemsPick();
        }else if ($(this).hasClass('next')) {
            $pagination.removeClass('active');
            orderA = orderA +2;
            $('#news .pagination ul li:nth-child('+orderA+')').addClass('active');
            middleITemsPick(); 
        }else if ($(this).hasClass('prev') && orderA == 3) {
            $pagination.removeClass('active');
            $('#news .pagination ul li:nth-child('+orderA+')').addClass('active');
            firstItemsPick();
        }else if ($(this).hasClass('prev')) {

            $pagination.removeClass('active');
            $('#news .pagination ul li:nth-child('+orderA+')').addClass('active');
            middleITemsPick();
        }else if ($(this).hasClass('last')) {
            orderA = max +2;
            $pagination.removeClass('active');
            $('#news .pagination ul li:nth-child('+orderA+')').addClass('active');
            lastItemsPick();
        }else if ($(this).hasClass('first')) {
            orderA =3;
            $pagination.removeClass('active');
            $('#news .pagination ul li:nth-child('+orderA+')').addClass('active');
            firstItemsPick();
        }
    }
 
    if ($(this).hasClass('number')) {
        $pagination.removeClass('active');
        $(this).addClass('active')
        var orderA = $('#news .pagination ul li.active').index() -1;
        if (orderA == 1) {
        }
        else if (orderA == max) {
            lastItemsPick();
        }//last button
        else{
            middleITemsPick();
        }//middle button
    }//when click to number button
    //hide appear button


    
    var orderA = $('#news .pagination ul li.active').index() -1;// reset order A to do this functions
    console.log(orderA);
    function lastToggle () {
        lastB.removeClass('appear');
        nextB.removeClass('appear');
        firstB.addClass('appear');
        prevB.addClass('appear');
    }
    function almostLastToggle () {
        lastB.removeClass('appear');
        firstB.addClass('appear');
        prevB.addClass('appear');
    }
    function almostFirstToggle () {
        lastB.addClass('appear');
        nextB.addClass('appear');

        prevB.addClass('appear');
    }
    function middleToggle () {
        firstB.addClass('appear');
        prevB.addClass('appear');
        lastB.addClass('appear');
        nextB.addClass('appear');
    }
    function firstToggle () {
        lastB.addClass('appear');
        nextB.addClass('appear');
        firstB.removeClass('appear');
        prevB.removeClass('appear');
    }
    if (orderA == max) {
        lastToggle();
    }else if(orderA == max -1){
        almostLastToggle()
    }else if( orderA ==2 ){
        almostFirstToggle();
    }else if (orderA !==1) {
        middleToggle();
    }else if (orderA == 1 ){
        firstToggle();
    }
//hide appear button


});
