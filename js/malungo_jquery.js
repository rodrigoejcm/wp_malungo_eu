

$(document).scroll(function () {
    var x = $(this).scrollTop(),
        home = $('.cor-scroll');


    if (x > 477) {
        $('.cor-scroll').css("background-color", "#303331");
    }else{
    	 $('.cor-scroll').css("background-color", "transparent");
    }
    
});