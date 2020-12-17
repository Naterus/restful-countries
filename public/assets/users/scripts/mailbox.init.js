/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Mailbox
 */

(function($) {
	"use strict";

	//Enable iCheck plugin for checkboxes
	//iCheck for checkbox and radio inputs
	$('.mailbox-messages input[type="checkbox"]').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue'
	});

	//Enable check and uncheck all functionality
	$(".checkbox-toggle").on("click",function () {
	var clicks = $(this).data('clicks');
		if (clicks) {
			//Uncheck all checkboxes
			$(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
			$(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
		} else {
			//Check all checkboxes
			$(".mailbox-messages input[type='checkbox']").iCheck("check");
			$(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
		}
		$(this).data("clicks", !clicks);
		return false;
	});

	//Handle starring for glyphicon and font awesome
	$(".mailbox-star").on("click",function (e) {
		e.preventDefault();
		//detect type
		var $this = $(this).find("a > i");
		var glyph = $this.hasClass("glyphicon");
		var fa = $this.hasClass("fa");

		//Switch states
		if (glyph) {
			$this.toggleClass("glyphicon-star");
			$this.toggleClass("glyphicon-star-empty");
		}

		if (fa) {
			$this.toggleClass("fa-star");
			$this.toggleClass("fa-star-o");
		}
		return false;
	});

})(jQuery);