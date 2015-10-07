(function ($, root, undefined) {
    $(window).on('load resize', function(){
        var heightWindow = $(window).height();
        $('.sidebar-left').height(heightWindow - 72);
        $('.sidebar-right').height(heightWindow - 50);
        $('.wrapper').css({'min-height': heightWindow + 'px'});
    });
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});

    $('.close-sidebar').on('click', function(){
        var sidebar = $(this).parent();
        sidebar.css({'z-index': '-1'});
        $('.wrapper').css({'transform': 'translate(0)'});
        setTimeout(function(){
            $('.wrapper').removeAttr('style');
            $('body').removeAttr('style');
            sidebar.removeAttr('style');

            $(window).trigger('resize');
        }, 500);

        $('.left-menu').fadeIn();
        $('.right-menu').fadeIn();
    });

    $('.show-menu').on('click', function(){
        var that = $(this);
        var widthWindow = $(window).width();

        $(that.data('target')).show();
        $('body').width(widthWindow).css('overflow-x', 'hidden');
        var path = 260;
        if(!that.hasClass('left-menu')) {
            path = -260;
            $('.left-menu').fadeOut();
        }
        else {
            $('.right-menu').fadeOut();
        }
        $('.wrapper').css({'transform': 'translate('+path+'px)', 'transition-duration': '500ms'});
        setTimeout(function(){
            $(that.data('target')).css({'z-index': '1'});
        }, 500);
    });

    $('.back-to-top').on('click', function(){
        $("html, body").animate({scrollTop: 0}, 500);
    });

    $('.button.refresh').on('click', function(){
        var href = window.location.href;
        window.location.href = href;
    });
})(jQuery, this);
