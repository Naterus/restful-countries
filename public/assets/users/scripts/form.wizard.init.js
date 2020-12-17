/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Form Wizard
 */

(function($) {
	"use strict";

	if ($('#rootwizard').length)
		$('#rootwizard').bootstrapWizard();

	if ($('#rootwizard-pill').length)
		$('#rootwizard-pill').bootstrapWizard({'tabClass': 'nav nav-tabs'});

	if ($('#rootwizard-progress').length)
		$('#rootwizard-progress').bootstrapWizard({'tabClass': 'nav nav-pills', 'debug': false, onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard-progress').find('.bar').css({width:$percent+'%'});
		}});

	if ($('#tabsleft').length){
		var $validator = $("#commentForm").validate({
			rules: {
				emailfield: {
					required: true,
					email: true,
					minlength: 3
				},
				namefield: {
					required: true,
					minlength: 3
				},
				urlfield: {
					required: true,
					minlength: 3,
					url: true
				}
			}
		});

		$('#tabsleft').bootstrapWizard({
			'tabClass': 'nav nav-tabs',
			'onNext': function (tab, navigation, index) {
				var $valid = $("#commentForm").valid();
				if (!$valid) {
					$validator.focusInvalid();
					return false;
				}
			}
		});
	}

})(jQuery);