var isHome = false;
$(document).ready(function () {

	$('.home-menu').css("border-bottom",
                        "1px solid rgba(247,239,231,0.5)");
    var location = window.location.href.split(_root)[1];
    var home_paths = [
        "",
        "/",
        "#",
        "/#",
        "index.php",
        "/index.php",
        "index.php#",
        "/index.php#"
    ];
    isHome = home_paths.indexOf(location)!=-1;
    if(!isHome || $(document).scrollTop() > 10){
        $('.logo-malungo img').addClass('active');
        $('.img-yaon').addClass('animation-done');
    }
    var logoUpLock = false;
    var logoDownLock = false;
    $(document).scroll(function () {
        var x = $(this).scrollTop(),
            home = $('.cor-scroll');

        if(isHome){
            if(x > 10){
                $('.img-yaon').addClass('animation-done');
                if(!logoUpLock){
                    logoUpLock = true;
                    setTimeout(function(){
                        $('.logo-malungo img').addClass('active');
                        logoUpLock = false;
                    }, 300);
                }
            }
            // else{
            //     $('.logo-malungo img').removeClass('active');
            //     if(!logoDownLock){
            //         logoDownLock = true;
            //         setTimeout(function(){
            //             $('.img-yaon').removeClass('animation-done');
            //             logoDownLock = false;
            //         }, 300);
            //     }
            // }
        }

        if (x > 40) {
            $('.cor-scroll').css("background-color", "#303331");
            $('.home-menu').css("border-bottom", "none");        
        }else{
            if(!isHome)
                $('.cor-scroll').css("background-color", "transparent");
            $('.home-menu').css("border-bottom",
                            "1px solid rgba(247,239,231,0.5)");
        }
        
    });
});
    


$( function() {
    $( "#tabs" ).tabs({
    	  active: 0
	});
});


$(document).ready(function () {
    $('.sub-menu').fadeOut(0);
    var $hasSubMenu = $('.menu-item-has-children');
    //removendo link do super-item
    for(var i=0; i<$hasSubMenu.length; i++){
        var $item = $($hasSubMenu[i]);
        var txt = $item.children('a').text();
        $item.children('a').remove();
        $item.prepend(txt);
    }

    $hasSubMenu.on('mouseover', function(ev){
        ev.stopPropagation();
        $(this).children('.sub-menu').stop().fadeIn();
        }).on('mouseout', function(ev){
            ev.stopPropagation();
            $(this).children('.sub-menu').stop().fadeOut();
    });
});
