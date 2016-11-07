$(document).ready(function () {

	$('.home-menu').css("border-bottom",
                        "1px solid rgba(247,239,231,0.5)");
});
	

$(document).scroll(function () {

    var x = $(this).scrollTop(),
        home = $('.cor-scroll');

    if(x > 10)
        $('.logo-malungo img').addClass('active');
    else
        $('.logo-malungo img').removeClass('active');

    if (x > 40) {
        $('.cor-scroll').css("background-color", "#303331");
        $('.home-menu').css("border-bottom", "none");        
    }else{
    	$('.cor-scroll').css("background-color", "transparent");
    	$('.home-menu').css("border-bottom",
                        "1px solid rgba(247,239,231,0.5)");
    }
    
});

$( function() {
    $( "#tabs" ).tabs({
    	  active: 0
	});
});
  