jQuery(document).ready(function($){
	$(".patient-carousel").owlCarousel({
		items : 3,
		margin: 30,
		loop:true,
		autoplay:false,
		nav:true,
		navText: ["<i class='fa fa-long-arrow-left'></i>" , "<i class='fa fa-long-arrow-right'></i>"],
	});

	$(".carousel-inner .item:first-child").addClass("active");
	$(".site-header").sticky({topSpacing: 0});
//smooth scroll
        $('li.smooth-menu a').bind('click',function(event){
            var $anchor = $(this);
            var headerH = '62';
            $('html,body').stop().animate({
                scrollTop : $($anchor.attr('href')).offset().top - headerH+"px"
            },1280,'easeInOutExpo');
            event.preventDefault();
        });

	 //scroll spy
        $('body').scrollspy({
            target: '#navbarSupportedContent',
            offset: 95
        });

        $('.navbar-nav li').on('click','li',function(){
            $('navbar-collapse ul.navbar-nav li.active').removeClass('active');
             $(this).addClass('active');
        });

});