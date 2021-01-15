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
        let link = $(this).attr('href');
        link = '#' + link.split('#')[1];
        if(link && $(link).length > 0) {
            const navbar_height = $('.navbar-header').innerHeight();
            scrollTop = $(link).offset().top - navbar_height;
            $('body, html').animate({
                scrollTop: scrollTop
            }, 500);
            return false;
        }
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
        dots: true,
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
                dots: true,
                items: 1,
            },
            768: {
                items: 3
            }
        }
    });

    $('.owl-cases').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        nav: false,
        items: 1,
        responsive: {
            0: {
                dots: true
            },
            768: {
                dots: false
            }
        }
    });

    $('.owl-courses').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        nav: false,
        responsive: {
            0: {
                dots: true,
                items: 1
            },
            768: {
                dots: false,
                items: 3
            }
        }
    });

    $('.owl-partners').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        nav: false,
        responsive: {
            0: {
                dots: true,
                items: 1
            },
            768: {
                dots: false,
                items: 3
            },
            992: {
                dots: false,
                items: 4
            }
        }
    });

    $('.owl-testimonials').owlCarousel({
        loop: true,
        margin: 15,
        stagePadding: 0,
        dots: true,
        navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
        items: 1,
        responsive: {
            0: {
                nav: false,
            },
            768: {
                nav: true
            }
        }
    });

    $('#commentform').removeAttr('novalidate');
})(jQuery);
