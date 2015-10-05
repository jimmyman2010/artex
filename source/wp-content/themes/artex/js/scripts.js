(function ($, root, undefined) {
    $(window).on('load resize', function(){
        var heightWindow = $(window).height();
        $('.sidebar-left').height(heightWindow - 72);
        $('.sidebar-right').height(heightWindow - 50);
    });
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});

    $('.close-sidebar').on('click', function(){
        $(this).parent().hide();
    });

    $('.show-menu').on('click', function(){
        $($(this).data('target')).show();
    });
	
})(jQuery, this);
