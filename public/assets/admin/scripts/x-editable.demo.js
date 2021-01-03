/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: X-Editable
 */

(function($) {
	"use strict";

	$(document).ready(function(){
		$('#inline-username').editable({
			type: 'text',
			pk: 1,
			name: 'username',
			title: 'Enter username',
			mode: 'inline'
		});

		$('#inline-firstname').editable({
			validate: function(value) {
				if($.trim(value) == '') return 'This field is required';
			},
			mode: 'inline'
		});

		$('#inline-sex').editable({
			prepend: "not selected",
			mode: 'inline',
			source: [
				{value: 1, text: 'Male'},
				{value: 2, text: 'Female'}
			],
			display: function(value, sourceData) {
				var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
					elem = $.grep(sourceData, function(o){return o.value == value;});

				if(elem.length) {
					$(this).text(elem[0].text).css("color", colors[value]);
				} else {
					$(this).empty();
				}
			}
		});

		$('#inline-status').editable({mode: 'inline'});

		$('#inline-group').editable({
			showbuttons: false,
			mode: 'inline'
		});

		$('#inline-dob').editable({mode: 'inline'});
		$('#inline-event').editable({mode: 'inline'});

		$('#inline-comments').editable({
			showbuttons: 'bottom',
			mode: 'inline'
		});

		$('#inline-fruits').editable({
			pk: 1,
			limit: 3,
			source: [
				{value: 1, text: 'banana'},
				{value: 2, text: 'peach'},
				{value: 3, text: 'apple'},
				{value: 4, text: 'watermelon'},
				{value: 5, text: 'orange'}
			],
			mode: 'inline'
		}); 
	});

	$("#switch-inline").on("change",function(){
		if ($(this).prop("checked")){
			destroy_all();
			$('#inline-username').editable({
				type: 'text',
				pk: 1,
				name: 'username',
				title: 'Enter username',
				mode: 'inline'
			});

			$('#inline-firstname').editable({
				validate: function(value) {
					if($.trim(value) == '') return 'This field is required';
				},
				mode: 'inline'
			});

			$('#inline-sex').editable({
				prepend: "not selected",
				mode: 'inline',
				source: [
					{value: 1, text: 'Male'},
					{value: 2, text: 'Female'}
				],
				display: function(value, sourceData) {
					var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
						elem = $.grep(sourceData, function(o){return o.value == value;});

					if(elem.length) {
						$(this).text(elem[0].text).css("color", colors[value]);
					} else {
						$(this).empty();
					}
				}
			});

			$('#inline-status').editable({mode: 'inline'});

			$('#inline-group').editable({
				showbuttons: false,
				mode: 'inline'
			});

			$('#inline-dob').editable({mode: 'inline'});
			$('#inline-event').editable({mode: 'inline'});

			$('#inline-comments').editable({
				showbuttons: 'bottom',
				mode: 'inline'
			});

			$('#inline-fruits').editable({
				pk: 1,
				limit: 3,
				source: [
					{value: 1, text: 'banana'},
					{value: 2, text: 'peach'},
					{value: 3, text: 'apple'},
					{value: 4, text: 'watermelon'},
					{value: 5, text: 'orange'}
				],
				mode: 'inline'
			}); 
		}else{
			destroy_all();
			$('#inline-username').editable({
				type: 'text',
				pk: 1,
				name: 'username',
				title: 'Enter username'
			});

			$('#inline-firstname').editable({
				validate: function(value) {
					if($.trim(value) == '') return 'This field is required';
				}
			});

			$('#inline-sex').editable({
				prepend: "not selected",
				source: [
					{value: 1, text: 'Male'},
					{value: 2, text: 'Female'}
				],
				display: function(value, sourceData) {
					var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
						elem = $.grep(sourceData, function(o){return o.value == value;});

					if(elem.length) {
						$(this).text(elem[0].text).css("color", colors[value]);
					} else {
						$(this).empty();
					}
				}
			});

			$('#inline-status').editable();

			$('#inline-group').editable({
				showbuttons: false
			});

			$('#inline-dob').editable();
			$('#inline-event').editable();

			$('#inline-comments').editable({
				showbuttons: 'bottom'
			});

			$('#inline-fruits').editable({
				pk: 1,
				limit: 3,
				source: [
					{value: 1, text: 'banana'},
					{value: 2, text: 'peach'},
					{value: 3, text: 'apple'},
					{value: 4, text: 'watermelon'},
					{value: 5, text: 'orange'}
				]
			}); 
		}
	});

	function destroy_all(){
		$('#inline-username').editable('destroy');
		$('#inline-firstname').editable('destroy');
		$('#inline-sex').editable('destroy');
		$('#inline-status').editable('destroy');
		$('#inline-group').editable('destroy');
		$('#inline-dob').editable('destroy');
		$('#inline-event').editable('destroy');
		$('#inline-comments').editable('destroy');
		$('#inline-fruits').editable('destroy'); 
	}	

})(jQuery);