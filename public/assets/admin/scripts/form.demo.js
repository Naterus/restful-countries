/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Form Demo
 */

(function($) {
	"use strict";

	if ($('.flexdatalist').length) $('.flexdatalist').flexdatalist();

	if ($('#popover-1').length) $('#popover-1').popSelect({
		showTitle: false,
		maxAllowed: 2
	});

	if ($('#popover-2').length) $('#popover-2').popSelect({
		showTitle: false,
		placeholderText: 'Click to Add More',
		position: 'bottom'
	});

	if ($('.select2_1').length) $(".select2_1").select2();

	if ($('.select2_2').length) $(".select2_2").select2({
		tags: true
	});

	if ($('.multiselect').length) $('.multiselect').multiselect();

	if ($('#search').length) $('#search').multiselect({
		search: {
			left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
			right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
		}
	});

	if ($("input[name='demo1']").length) $("input[name='demo1']").TouchSpin({
		min: 0,
		max: 100,
		step: 0.1,
		decimals: 2,
		boostat: 5,
		maxboostedstep: 10,
		postfix: '%'
	});

	if ($("input[name='demo2']").length)
		$("input[name='demo2']").TouchSpin({
			min: -1000000000,
			max: 1000000000,
			stepinterval: 50,
			maxboostedstep: 10000000,
			prefix: '$'
		});
	
	if ($("input[name='demo_vertical']").length)
		$("input[name='demo_vertical']").TouchSpin({
			verticalbuttons: true
		});

	if ($("input[name='demo_vertical2']").length)
		$("input[name='demo_vertical2']").TouchSpin({
			verticalbuttons: true,
			verticalupclass: 'glyphicon glyphicon-plus',
			verticaldownclass: 'glyphicon glyphicon-minus'
		});

	if ($("input[name='demo5']").length)
		$("input[name='demo5']").TouchSpin({
			prefix: "pre",
			postfix: "post"
		});
	// Time Picker
	if ($("#timepicker").length)
		$('#timepicker').timepicker({
			defaultTIme : false
		});

	if ($("#timepicker2").length)
		$('#timepicker2').timepicker({
			showMeridian : false
		});

	if ($("#timepicker3").length)
		$('#timepicker3').timepicker({
			minuteStep : 15
		});

	//Colorpicker
	if ($(".colorpicker-default").length)
		$('.colorpicker-default').colorpicker({
			format: 'hex'
		});

	if ($(".colorpicker-rgba").length)
		$('.colorpicker-rgba').colorpicker();

	// Date Picker
	if ($("#datepicker").length)
		$('#datepicker').datepicker();

	if ($("#datepicker-autoclose").length)
		$('#datepicker-autoclose').datepicker({
			autoclose: true,
			todayHighlight: true
		});

	if ($("#datepicker-inline").length)
		$('#datepicker-inline').datepicker();

	if ($("#datepicker-multiple-date").length)
		$('#datepicker-multiple-date').datepicker({
			format: "mm/dd/yyyy",
			clearBtn: true,
			multidate: true,
			multidateSeparator: ","
		});

	if ($("#date-range").length)
		$('#date-range').datepicker({
			toggleActive: true
		});

	//Date range

	//Date range picker
	if ($(".input-daterange-datepicker").length)
		$('.input-daterange-datepicker').daterangepicker({
			buttonClasses: ['btn', 'btn-sm'],
			applyClass: 'btn-default',
			cancelClass: 'btn-primary'
		});

	if ($(".input-daterange-timepicker").length)
		$('.input-daterange-timepicker').daterangepicker({
			timePicker: true,
			format: 'MM/DD/YYYY h:mm A',
			timePickerIncrement: 30,
			timePicker12Hour: true,
			timePickerSeconds: false,
			buttonClasses: ['btn', 'btn-sm'],
			applyClass: 'btn-default',
			cancelClass: 'btn-primary'
		});

	if ($(".input-limit-datepicker").length)
		$('.input-limit-datepicker').daterangepicker({
			format: 'MM/DD/YYYY',
			minDate: '06/01/2016',
			maxDate: '06/30/2016',
			buttonClasses: ['btn', 'btn-sm'],
			applyClass: 'btn-default',
			cancelClass: 'btn-primary',
			dateLimit: {
				days: 6
			}
		});

	if ($("#reportrange").length){
		$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

		$('#reportrange').daterangepicker({
			format: 'MM/DD/YYYY',
			startDate: moment().subtract(29, 'days'),
			endDate: moment(),
			minDate: '01/01/2016',
			maxDate: '12/31/2016',
			dateLimit: {
				days: 60
			},
			showDropdowns: true,
			showWeekNumbers: true,
			timePicker: false,
			timePickerIncrement: 1,
			timePicker12Hour: true,
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			},
			opens: 'left',
			drops: 'down',
			buttonClasses: ['btn', 'btn-sm'],
			applyClass: 'btn-success',
			cancelClass: 'btn-default',
			separator: ' to ',
			locale: {
				applyLabel: 'Submit',
				cancelLabel: 'Cancel',
				fromLabel: 'From',
				toLabel: 'To',
				customRangeLabel: 'Custom',
				daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
				monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				firstDay: 1
			}
		}, function (start, end, label) {
			console.log(start.toISOString(), end.toISOString(), label);
			$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		});
	}

	//Bootstrap-MaxLength
	if ($('input#defaultconfig').length)
		$('input#defaultconfig').maxlength()

	if ($('input#thresholdconfig').length)
		$('input#thresholdconfig').maxlength({
			threshold: 20
		});

	if ($('input#moreoptions').length)
		$('input#moreoptions').maxlength({
			alwaysShow: true,
			warningClass: "label label-success",
			limitReachedClass: "label label-danger"
		});

	if ($('input#alloptions').length)
		$('input#alloptions').maxlength({
			alwaysShow: true,
			warningClass: "label label-success",
			limitReachedClass: "label label-danger",
			separator: ' out of ',
			preText: 'You typed ',
			postText: ' chars available.',
			validate: true
		});

	if ($('textarea#textarea').length)
		$('textarea#textarea').maxlength({
			alwaysShow: true
		});

	if ($('input#placement').length)
		$('input#placement').maxlength({
			alwaysShow: true,
			placement: 'top-left'
		});

})(jQuery);