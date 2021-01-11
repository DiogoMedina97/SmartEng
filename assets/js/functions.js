(function($) {
	function navbar_active() {
		const scrollTop = $(window).scrollTop();

		if( scrollTop > 0 ) {
			$('.navbar').addClass('active');
		} else {
			$('.navbar').removeClass('active');
		}
    }
    
    navbar_active();

	$(window).scroll(function(){
		navbar_active();
    });
    
	$('.navbar-nav > li > a').click(function(){
		const link = $(this).attr('href');
		const navbar_height = $('.navbar-header').innerHeight();
		if( $(link).length > 0 ) {
			scrollTop = $(link).offset().top - navbar_height;
		} else {
			scrollTop = 0;
		}
		$('body, html').animate({
			scrollTop: scrollTop
		}, 500);
		return false;
    });
    
	$('button.navbar-toggle').click(function(){
		if( !$('.navbar-collapse').hasClass('in') ) {
			$('.navbar-header').addClass('active');
		} else {
			$('.navbar-header').removeClass('active');
		}
	});

    $('.owl-banner').owlCarousel({
        loop: true,
        margin: 0,
        stagePadding: 0,
        dots: false,
        nav: false,
        items: 1
    });

    $('.owl-services').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            }
        }
    });

    $('.owl-courses').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            }
        }
    });

    $('.owl-partners').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 4
            }
        }
    });

    $('.owl-testimonials').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        dots: false,
        nav: false,
        items: 1
    });
    
    $('.owl-cases').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        dots: false,
        nav: false,
        items: 1
    });
})(jQuery);
