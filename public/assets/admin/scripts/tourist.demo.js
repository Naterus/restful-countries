/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Tourist
 */

(function($) {
	"use strict";

	var steps = [{
		content: "<h4>Current online user</h4><p>You can find here status of user who's currently online.</p>",
		highlightTarget: true,
		nextButton: true,
		target: $('#tour-1'),
		my: 'top left',
		at: 'bottom center'
	}, {
		content: "<h4>Page title</h4><p>This is page title.</p>",
		highlightTarget: false,
		nextButton: true,
		target: $('#tour-2'),
		my: 'top center',
		at: 'bottom center'
	}, {
		content: "<h4>Notification</h4><p>Click here to view notifications.</p>",
		highlightTarget: false,
		nextButton: true,
		target: $('#tour-3'),
		my: 'top right',
		at: 'bottom center'
	}, {
		content: "<h4>Search</h4><p>Find somthing userful here!</p>",
		highlightTarget: false,
		nextButton: true,
		target: $('#tour-4'),
		my: 'top center',
		at: 'bottom center'
	}]

	var tour = new Tourist.Tour({
		steps: steps,
		tipClass: 'Bootstrap',
		tipOptions:{ showEffect: 'slidein' }
	});
	tour.start();

})(jQuery);