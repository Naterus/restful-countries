/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Flot-Chart
 */

(function($) {
	"use strict";

	var FlotChart = {};

	$(document).ready(function(){
		if ($("#real-time-flot-chart").length) FlotChart.module.realtime.init();
		if ($("#categories-flot-chart").length) FlotChart.module.categories.init();
		if ($("#pile-flot-chart").length) FlotChart.module.pile.init();
		if ($("#donut-flot-chart").length) FlotChart.module.donut.init();
		if ($("#lines-flot-chart").length) FlotChart.module.lines.init();
		return false;
	});

	$(window).resize(function(){
		if ($("#real-time-flot-chart").length) FlotChart.module.realtime.init();
		if ($("#categories-flot-chart").length) FlotChart.module.categories.init();
		if ($("#pile-flot-chart").length) FlotChart.module.pile.init();
		if ($("#donut-flot-chart").length) FlotChart.module.donut.init();
		if ($("#lines-flot-chart").length) FlotChart.module.lines.init();
		return false;
	});

	FlotChart.module = {
		categories : {
			container : "#categories-flot-chart",
			data : [ ["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9] ],
			init: function(){
				$.plot(FlotChart.module.categories.container, [FlotChart.module.categories.data], {
					colors : ['#f9c851'],
					series: {
						bars: {
							show: true,
							barWidth: 0.6,
							align: "center"
						}
					},
					xaxis: {
						mode: "categories",
						tickLength: 0
					}
				});
				return false;
			}
		},
		donut : {
			container : "#donut-flot-chart",
			data : [
				{ label: "Series 1",  data: 50},
				{ label: "Series 2",  data: 60},
				{ label: "Series 3",  data: 90},
				{ label: "Series 4",  data: 70},
				{ label: "Series 5",  data: 80},
			],
			init: function(){
				$.plot(FlotChart.module.donut.container, FlotChart.module.donut.data, {
					tooltip : true,
					tooltipOpts : {
						content : "%s, %p.0%"
					},
					series: {
						pie: {
							show: true,
							innerRadius: 0.5
						}
					},
					grid: {
						hoverable: true,
					},
					colors: ["#03a9f4", "#01ba9a", "#dcdcdc", "#6c85bd", "#f8ca4e"],
					legend : {
						show : true,
						labelFormatter : function(label, series) {
							return '<div style="font-size:14px;">&nbsp;' + label + '</div>'
						},
						labelBoxBorderColor : null,
						margin : 20,
						width : 20,
						padding : 1
					},
				});
				return false;
			}
		},
		lines : {
			container : "#lines-flot-chart",
			data : [
				[[0,14],[1,20],[2,23],[3,20],[4,24],[5,18],[6,27],[7,24],[8,16],[9,26],[10,25]],
				[[0,4],[1,10],[2,2],[3,17],[4,25],[5,17],[6,22],[7,22],[8,18],[9,11],[10,20]]
			],
			init: function(){
				$.plot(FlotChart.module.lines.container, FlotChart.module.lines.data, {
					colors : ['#6e8cd7', '#03a9f4'],
					series: {
						lines: {
							show: !0,
							fill: !0,
							lineWidth: 1,
							fillColor: {
								colors: [{
									opacity: .5
								}, {
									opacity: .5
								}]
							}
						},
						points: {
							show: !0
						},
						shadowSize: 0
					},
					legend: {
						position: "nw"
					},
					grid: {
						hoverable: !0,
						clickable: !0,
						borderColor: "#efefef",
						borderWidth: 1,
						labelMargin: 10,
						backgroundColor: "#fff"
					},
					yaxis: {
						min: 0,
						max: 40,
						color: "rgba(0,0,0,0.1)"
					},
					xaxis: {
						color: "rgba(0,0,0,0.1)"
					},
					tooltip: !0,
					tooltipOpts: {
						content: "%s: Value of %x is %y",
						shifts: {
							x: -60,
							y: 25
						},
						defaultTheme: !1
					}
				});
				return false;
			}
		},
		pile : {
			container : "#pile-flot-chart",
			data : [
				{ label: "Series 1",  data: 30},
				{ label: "Series 2",  data: 30},
				{ label: "Series 3",  data: 90},
				{ label: "Series 4",  data: 70},
			],
			init: function(){
				$.plot(FlotChart.module.pile.container, FlotChart.module.pile.data, {
					series: {
						pie: {
							show: true,
							radius: 1,
							label: {
								show: true,
								radius: 3/4,
								formatter: labelFormatter,
								background: {
									opacity: 0.5
								}
							}
						}
					},
					grid: {
						hoverable: true
					},
					legend: {
						show: false
					},
					colors: ["#03a9f4", "#01ba9a", "#dcdcdc", "#6c85bd"]
				});
				return false;
			}
		},
		realtime : {
			container : $("#real-time-flot-chart"),
			maximum : 0,
			data : [],
			series : [],
			plot : {},
			init : function(){
				FlotChart.module.realtime.maximum = FlotChart.module.realtime.container.outerWidth() / 2 || 300;
				FlotChart.module.realtime.series = [{
					data: FlotChart.func.getRandomData(),
					lines: {
						fill: true,
						lineWidth: 1,
						fillColor: {
							colors: [{
								opacity: .45
							}, {
								opacity: .45
							}]
						}
					},
					points: {
						show: !1
					},
					shadowSize: 0
				}];

				FlotChart.module.realtime.plot = $.plot(FlotChart.module.realtime.container, FlotChart.module.realtime.series, {
					colors : ['#03a9f4'],
					grid: {
						show: !0,
						aboveData: !1,
						color: "#dcdcdc",
						labelMargin: 15,
						axisMargin: 0,
						borderWidth: 0,
						borderColor: null,
						minBorderMargin: 5,
						clickable: !0,
						hoverable: !0,
						autoHighlight: !1,
						mouseActiveRadius: 20
					},
					yaxis: {
						min: 0,
						max: 150,
						color: "rgba(0,0,0,0.1)"
					},
					xaxis: {
						show: !1
					},
					legend: {
						show: true
					}
				});

				// Update the random dataset at 25FPS for a smoothly-animating chart

				setInterval(function updateRandom() {
					FlotChart.module.realtime.series[0].data = FlotChart.func.getRandomData();
					FlotChart.module.realtime.plot.setData(FlotChart.module.realtime.series);
					FlotChart.module.realtime.plot.draw();
				}, 40); 

				return false;
			} 
		}
	}

	FlotChart.func = {
		getRandomData : function(){
			if (FlotChart.module.realtime.data.length) {
				FlotChart.module.realtime.data = FlotChart.module.realtime.data.slice(1);
			}

			while (FlotChart.module.realtime.data.length < FlotChart.module.realtime.maximum) {
				var previous = FlotChart.module.realtime.data.length ? FlotChart.module.realtime.data[FlotChart.module.realtime.data.length - 1] : 50;
				var y = previous + Math.random() * 10 - 5;
				FlotChart.module.realtime.data.push(y < 0 ? 0 : y > 100 ? 100 : y);
			}

			// zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < FlotChart.module.realtime.data.length; ++i) {
				res.push([i, FlotChart.module.realtime.data[i]])
			}

			return res;
		}
	}

	function labelFormatter(label, series) {
		return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	}

})(jQuery);