/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Form Demo
 */

(function($) {
	"use strict";

	$('#countdown').countdown('2018/01/01', function(event) {
		$(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
	});

})(jQuery);