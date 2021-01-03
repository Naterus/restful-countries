/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Flot-Chart
 */

(function($) {
	"use strict";

	var Chart = {};

	$(document).ready(function(){
		if ($("#3d-highcharts").length) Chart.bar_3d();
		if ($("#3dscatter-highcharts").length) Chart.pie_3d();
		if ($("#3d-highcharts").length) Chart.scatter_3d();
		if ($("#3dstacking-highcharts").length) Chart.stacking_3d();
		if ($("#random-highcharts").length) Chart.random_data();
		if ($("#click-highcharts").length) Chart.click_data();
		return false;
	});

	$(window).resize(function(){
		return false;
	});

	Chart = {
		bar_3d : function () {
			var chart = new Highcharts.Chart({
			chart: {
					renderTo: '3d-highcharts',
					type: 'column',
					options3d: {
						enabled: true,
						alpha: 15,
						beta: 15,
						depth: 50,
						viewDistance: 25
					}
				},
				title: {
					text: 'Bar Chart Demo'
				},
				plotOptions: {
					column: {
						depth: 25
					}
				},
				series: [{
					data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
				}]
			});
		},
		pie_3d: function() {
			$('#3dpie-highcharts').highcharts({
				chart: {
					type: 'pie',
					options3d: {
						enabled: true,
						alpha: 45,
						beta: 0
					}
				},
				title: {
					text: 'Browser market shares at a specific website, 2014'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						depth: 35,
						dataLabels: {
							enabled: true,
							format: '{point.name}'
						}
					}
				},
				series: [{
					type: 'pie',
					name: 'Browser share',
					data: [
						['Firefox', 45.0],
						['IE', 26.8],
						{
							name: 'Chrome',
							y: 12.8,
							sliced: true,
							selected: true
						},
						['Safari', 8.5],
						['Opera', 6.2],
						['Others', 0.7]
					]
				}]
			});
		},
		scatter_3d : function() {
			// Give the points a 3D feel by adding a radial gradient
			Highcharts.getOptions().colors = $.map(Highcharts.getOptions().colors, function (color) {
				return {
					radialGradient: {
						cx: 0.4,
						cy: 0.3,
						r: 0.5
					},
					stops: [
						[0, color],
						[1, Highcharts.Color(color).brighten(-0.2).get('rgb')]
					]
				};
			});

			// Set up the chart
			var chart = new Highcharts.Chart({
				chart: {
					renderTo: '3dscatter-highcharts',
					margin: 100,
					type: 'scatter',
					options3d: {
						enabled: true,
						alpha: 10,
						beta: 30,
						depth: 250,
						viewDistance: 5,
						fitToPlot: false,
						frame: {
							bottom: { size: 1, color: 'rgba(0,0,0,0.02)' },
							back: { size: 1, color: 'rgba(0,0,0,0.04)' },
							side: { size: 1, color: 'rgba(0,0,0,0.06)' }
						}
					}
				},
				title: {
					text: 'Draggable box'
				},
				subtitle: {
					text: 'Click and drag the plot area to rotate in space'
				},
				plotOptions: {
					scatter: {
						width: 10,
						height: 10,
						depth: 10
					}
				},
				yAxis: {
					min: 0,
					max: 10,
					title: null
				},
				xAxis: {
					min: 0,
					max: 10,
					gridLineWidth: 1
				},
				zAxis: {
					min: 0,
					max: 10,
					showFirstLabel: false
				},
				legend: {
					enabled: false
				},
				series: [{
					name: 'Reading',
					colorByPoint: true,
					data: [[1, 6, 5], [8, 7, 9], [1, 3, 4], [4, 6, 8], [5, 7, 7], [6, 9, 6], [7, 0, 5], [2, 3, 3], [3, 9, 8], [3, 6, 5], [4, 9, 4], [2, 3, 3], [6, 9, 9], [0, 7, 0], [7, 7, 9], [7, 2, 9], [0, 6, 2], [4, 6, 7], [3, 7, 7], [0, 1, 7], [2, 8, 6], [2, 3, 7], [6, 4, 8], [3, 5, 9], [7, 9, 5], [3, 1, 7], [4, 4, 2], [3, 6, 2], [3, 1, 6], [6, 8, 5], [6, 6, 7], [4, 1, 1], [7, 2, 7], [7, 7, 0], [8, 8, 9], [9, 4, 1], [8, 3, 4], [9, 8, 9], [3, 5, 3], [0, 2, 4], [6, 0, 2], [2, 1, 3], [5, 8, 9], [2, 1, 1], [9, 7, 6], [3, 0, 2], [9, 9, 0], [3, 4, 8], [2, 6, 1], [8, 9, 2], [7, 6, 5], [6, 3, 1], [9, 3, 1], [8, 9, 3], [9, 1, 0], [3, 8, 7], [8, 0, 0], [4, 9, 7], [8, 6, 2], [4, 3, 0], [2, 3, 5], [9, 1, 4], [1, 1, 4], [6, 0, 2], [6, 1, 6], [3, 8, 8], [8, 8, 7], [5, 5, 0], [3, 9, 6], [5, 4, 3], [6, 8, 3], [0, 1, 5], [6, 7, 3], [8, 3, 2], [3, 8, 3], [2, 1, 6], [4, 6, 7], [8, 9, 9], [5, 4, 2], [6, 1, 3], [6, 9, 5], [4, 8, 2], [9, 7, 4], [5, 4, 2], [9, 6, 1], [2, 7, 3], [4, 5, 4], [6, 8, 1], [3, 4, 0], [2, 2, 6], [5, 1, 2], [9, 9, 7], [6, 9, 9], [8, 4, 3], [4, 1, 7], [6, 2, 5], [0, 4, 9], [3, 5, 9], [6, 9, 1], [1, 9, 2]]
				}]
			});


			// Add mouse events for rotation
			$(chart.container).on('mousedown.hc touchstart.hc', function (eStart) {
				eStart = chart.pointer.normalize(eStart);

				var posX = eStart.pageX,
					posY = eStart.pageY,
					alpha = chart.options.chart.options3d.alpha,
					beta = chart.options.chart.options3d.beta,
					newAlpha,
					newBeta,
					sensitivity = 5; // lower is more sensitive

				$(document).on({
					'mousemove.hc touchdrag.hc': function (e) {
						// Run beta
						newBeta = beta + (posX - e.pageX) / sensitivity;
						chart.options.chart.options3d.beta = newBeta;

						// Run alpha
						newAlpha = alpha + (e.pageY - posY) / sensitivity;
						chart.options.chart.options3d.alpha = newAlpha;

						chart.redraw(false);
					},
					'mouseup touchend': function () {
						$(document).off('.hc');
					}
				});
			});
		},
		stacking_3d: function () {
			$('#3dstacking-highcharts').highcharts({
				chart: {
					type: 'column',
					options3d: {
						enabled: true,
						alpha: 15,
						beta: 15,
						viewDistance: 25,
						depth: 40
					}
				},

				title: {
					text: 'Total fruit consumption, grouped by gender'
				},

				xAxis: {
					categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
				},

				yAxis: {
					allowDecimals: false,
					min: 0,
					title: {
						text: 'Number of fruits'
					}
				},

				tooltip: {
					headerFormat: '<b>{point.key}</b><br>',
					pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
				},

				plotOptions: {
					column: {
						stacking: 'normal',
						depth: 40
					}
				},

				series: [{
					name: 'John',
					data: [5, 3, 4, 7, 2],
					stack: 'male'
				}, {
					name: 'Joe',
					data: [3, 4, 4, 2, 5],
					stack: 'male'
				}, {
					name: 'Jane',
					data: [2, 5, 6, 2, 1],
					stack: 'female'
				}, {
					name: 'Janet',
					data: [3, 0, 4, 4, 3],
					stack: 'female'
				}]
			});
		},
		random_data: function() {
			Highcharts.setOptions({
				global: {
					useUTC: false
				}
			});

			$('#random-highcharts').highcharts({
				chart: {
					type: 'spline',
					animation: Highcharts.svg, // don't animate in old IE
					marginRight: 10,
					events: {
						load: function () {

							// set up the updating of the chart each second
							var series = this.series[0];
							setInterval(function () {
								var x = (new Date()).getTime(), // current time
									y = Math.random();
								series.addPoint([x, y], true, true);
							}, 1000);
						}
					}
				},
				title: {
					text: 'Live random data'
				},
				xAxis: {
					type: 'datetime',
					tickPixelInterval: 150
				},
				yAxis: {
					title: {
						text: 'Value'
					},
					plotLines: [{
						value: 0,
						width: 1,
						color: '#808080'
					}]
				},
				tooltip: {
					formatter: function () {
						return '<b>' + this.series.name + '</b><br/>' +
							Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
							Highcharts.numberFormat(this.y, 2);
					}
				},
				legend: {
					enabled: false
				},
				exporting: {
					enabled: false
				},
				series: [{
					name: 'Random data',
					data: (function () {
						// generate an array of random data
						var data = [],
							time = (new Date()).getTime(),
							i;

						for (i = -19; i <= 0; i += 1) {
							data.push({
								x: time + i * 1000,
								y: Math.random()
							});
						}
						return data;
					}())
				}]
			});
		},
		click_data: function(){
			$('#click-highcharts').highcharts({
				chart: {
					type: 'scatter',
					margin: [70, 50, 60, 80],
					events: {
						click: function (e) {
							// find the clicked values and the series
							var x = e.xAxis[0].value,
								y = e.yAxis[0].value,
								series = this.series[0];

							// Add it
							series.addPoint([x, y]);

						}
					}
				},
				title: {
					text: 'User supplied data'
				},
				subtitle: {
					text: 'Click the plot area to add a point. Click a point to remove it.'
				},
				xAxis: {
					gridLineWidth: 1,
					minPadding: 0.2,
					maxPadding: 0.2,
					maxZoom: 60
				},
				yAxis: {
					title: {
						text: 'Value'
					},
					minPadding: 0.2,
					maxPadding: 0.2,
					maxZoom: 60,
					plotLines: [{
						value: 0,
						width: 1,
						color: '#808080'
					}]
				},
				legend: {
					enabled: false
				},
				exporting: {
					enabled: false
				},
				plotOptions: {
					series: {
						lineWidth: 1,
						point: {
							events: {
								'click': function () {
									if (this.series.data.length > 1) {
										this.remove();
									}
								}
							}
						}
					}
				},
				series: [{
					data: [[20, 20], [80, 80]]
				}]
			});
		}
	}

})(jQuery);