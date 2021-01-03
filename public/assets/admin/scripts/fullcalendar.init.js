/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Full Calendar
 */

$(document).ready(function() {


	/* initialize the calendar
	-----------------------------------------------------------------*/

	if ($('#calendar').length){
		var todayDate = moment().startOf('day');
		var YM = todayDate.format('YYYY-MM');
		var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
		var TODAY = todayDate.format('YYYY-MM-DD');
		var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,list'
			},
			buttonIcons: {
				prev: 'none fa fa-angle-left',
				next: 'none fa fa-angle-right',
				prevYear: 'none fa fa-angle-left',
				nextYear: 'none fa fa-angle-right'
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			navLinks: true,
			droppable: true, // this allows things to be dropped onto the calendar
			drop: function(date, allDay) {
				var originalEventObject = $(this).data('eventObject');
				var valueArray = ($(this).attr('class')).split(" ");
				var thisClass;
				for(var i=0; i<valueArray.length; i++){
					if (valueArray[i].search("bg") > -1){
						thisClass = valueArray[i];
					}
				}
				var copiedEventObject = $.extend({}, originalEventObject);
				copiedEventObject.start = date;
				copiedEventObject.className = thisClass;
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}
			},
			events: [
				{
					title: 'All Day Event',
					start: YM + '-01',
					className: 'bg-success'
				},
				{
					title: 'Long Event',
					start: YM + '-07',
					end: YM + '-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: YM + '-09T16:00:00',
					className: 'bg-danger'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: YM + '-16T16:00:00',
					className: 'bg-danger'
				},
				{
					title: 'Conference',
					start: YESTERDAY,
					end: TOMORROW,
					className: 'bg-warning'
				},
				{
					title: 'Meeting',
					start: TODAY + 'T10:30:00',
					end: TODAY + 'T12:30:00',
					className: 'bg-success'
				},
				{
					title: 'Lunch',
					start: TODAY + 'T12:00:00',
					className: 'bg-primary'
				},
				{
					title: 'Meeting',
					start: TODAY + 'T14:30:00',
					className: 'bg-success'
				},
				{
					title: 'Happy Hour',
					start: TODAY + 'T17:30:00',
					className: 'bg-primary'
				},
				{
					title: 'Dinner',
					start: TODAY + 'T20:00:00',
					className: 'bg-success'
				},
				{
					title: 'Birthday Party',
					start: TOMORROW + 'T07:00:00',
					className: 'bg-orange'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: YM + '-28'
				}
			]
		});
		$('#external-events .fc-event').each(function () {
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
		});
	}

	if ($("#calendar-widget").length){
		$('#calendar-widget').fullCalendar({
			height: 470,
			header: {
				left: 'prev,next',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			buttonIcons: {
				prev: 'none fa fa-angle-left',
				next: 'none fa fa-angle-right',
				prevYear: 'none fa fa-angle-left',
				nextYear: 'none fa fa-angle-right'
			},
			editable: true,
			defaultDate: '2016-10-11',
			events: [
				{
					title: 'Birthday',
					start: '2016-10-11',
					className: 'bg-success'
				},
				{
					title: 'NinjaTeam Events',
					start: '2016-10-16',
					end: '2016-10-18',
					className: 'bg-primary'
				},
				{
					title: 'Meeting',
					start: '2016-10-13',
					end: '2016-10-14',
					className: 'bg-danger'
				},
				{
					title: 'Events Group',
					start: '2016-10-03',
					end: '2016-10-04',
					className: 'bg-warning'
				},
				{
					title: 'Group',
					start: '2016-10-28',
					end: '2016-10-29',
					className: 'bg-violet'
				},
			]
		});
	}


});