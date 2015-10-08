(function ($, root, undefined) {
    $(window).on('load resize', function(){
        var heightWindow = document.documentElement.clientHeight;
        var widthWindow = document.documentElement.clientWidth;
        var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        if(iOS) {
            var zoomLevel = document.documentElement.clientWidth / window.innerWidth;
            heightWindow = window.innerHeight * zoomLevel;
            widthWindow = window.innerWidth * zoomLevel;
        }
        $('.siteWrapper').width(widthWindow).css('overflow-x', 'hidden');
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
        closeSidebar(sidebar);
    });

    $('.show-menu').on('click', function(){
        var that = $(this);
        var sidebar = $(that.data('target'));

        if(sidebar.hasClass('open')) {
            closeSidebar(sidebar);
        }
        else {
            openSidebar(that, sidebar);
        }
    });

    function openSidebar(button, sidebar) {
        sidebar.addClass('open').show();
        var path = 260;
        if(!button.hasClass('left-menu')) {
            path = -260;
            $('.left-menu').fadeOut();
        }
        else {
            $('.right-menu').fadeOut();
        }
        $('.wrapper').css({'transform': 'translate('+path+'px)', 'transition-duration': '500ms'});
        setTimeout(function(){
            sidebar.css({'z-index': '1'});
        }, 500);
    }

    function closeSidebar(sidebar) {
        sidebar.removeClass('open').css({'z-index': '-1'});
        $('.wrapper').css({'transform': 'translate(0)'});
        setTimeout(function(){
            $('.wrapper').removeAttr('style');
            $('.siteWrapper').removeAttr('style');
            sidebar.removeAttr('style');

            $(window).trigger('resize');
        }, 500);

        $('.left-menu').fadeIn();
        $('.right-menu').fadeIn();
    }

    $('.back-to-top').on('click', function(){
        $("html, body").animate({scrollTop: 0}, 500);
    });

    $('.button.refresh').on('click', function(){
        if($(this).hasClass('manual')) {
            //use link href
        }
        else {
            var href = window.location.href;
            href = href.replace('#', '');
            window.location.href = href;
        }
    });
})(jQuery, this);
