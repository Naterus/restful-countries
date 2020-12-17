/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Ion Ranger Slider
 */

(function($) {
	"use strict";

	var slider = {};

	$(document).ready(function(){
		if ($("#ion-range-01").length) slider.default();
		if ($("#ion-range-02").length) slider.minMax();
		if ($("#ion-range-03").length) slider.prefix();
		if ($("#ion-range-04").length) slider.negative();
		if ($("#ion-range-05").length) slider.step();
		if ($("#ion-range-06").length) slider.fractional();
		if ($("#ion-range-07").length) slider.arrayNumber();
		if ($("#ion-range-08").length) slider.arrayStringNumber();
		if ($("#ion-range-09").length) slider.arrayStringMonth();
		return false;
	});

	slider = {
		default: function(){
			$("#ion-range-01").ionRangeSlider();
			return false;
		},
		minMax: function(){
			$("#ion-range-02").ionRangeSlider({
				min: 100,
				max: 1000,
				from: 550
			});
			return false;
		},
		prefix: function(){
			$("#ion-range-03").ionRangeSlider({
				type: "double",
				grid: true,
				min: 0,
				max: 1000,
				from: 200,
				to: 800,
				prefix: "$"
			});
			return false;
		},
		negative: function(){
			$("#ion-range-04").ionRangeSlider({
				type: "double",
				grid: true,
				min: -1000,
				max: 1000,
				from: -500,
				to: 500
			});
			return false;
		},
		step: function(){
			$("#ion-range-05").ionRangeSlider({
				type: "double",
				grid: true,
				min: -1000,
				max: 1000,
				from: -500,
				to: 500,
				step: 250
			});
			return false;
		},
		fractional: function(){
			$("#ion-range-06").ionRangeSlider({
				type: "double",
				grid: true,
				min: -12.8,
				max: 12.8,
				from: -3.2,
				to: 3.2,
				step: 0.1
			});
			return false;
		},
		arrayNumber: function(){
			$("#ion-range-07").ionRangeSlider({
				type: "double",
				grid: true,
				from: 1,
				to: 5,
				values: [0, 10, 100, 1000, 10000, 100000, 1000000]
			});
			return false;
		},
		arrayStringNumber: function(){
			$("#ion-range-08").ionRangeSlider({
				grid: true,
				from: 5,
				values: [
					"zero", "one",
					"two", "three",
					"four", "five",
					"six", "seven",
					"eight", "nine",
					"ten"
				]
			});
			return false;
		},
		arrayStringMonth: function(){
			$("#ion-range-09").ionRangeSlider({
				grid: true,
				from: 3,
				values: [
					"January", "February", "March",
					"April", "May", "June",
					"July", "August", "September",
					"October", "November", "December"
				]
			});
			return false;
		}
	}

})(jQuery);