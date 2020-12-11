/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Chartist-Chart
 */

(function($) {
	"use strict";

	var ChartistChart = {};

	$(document).ready(function(){
		if ($("#area-chartist-chart").length) ChartistChart.area();
		if ($("#bar-chartist-chart").length) ChartistChart.bar();
		if ($("#bi-polar-area-chartist-chart").length) ChartistChart.biPolarArea();
		if ($("#bi-polar-bar-chartist-chart").length) ChartistChart.biPolarBar();
		if ($("#donut-bar-chartist-chart").length) ChartistChart.donut();
		if ($("#donut-animation-bar-chartist-chart").length) ChartistChart.donutAnimation();
		if ($("#gauge-bar-chartist-chart").length) ChartistChart.gauge();
		if ($("#horizontal-bar-chartist-chart").length) ChartistChart.horizontalBar();
		if ($("#line-chartist-chart").length) ChartistChart.line();
		if ($("#pie-bar-chartist-chart").length) ChartistChart.pie();
		if ($("#scatter-chartist-chart").length) ChartistChart.scatter();
		if ($("#smil-animation-chartist-chart").length) ChartistChart.smilAnimation();
		if ($("#smil-animation-index-chartist-chart").length) ChartistChart.smilAnimationIndex();

		if ($("#stacked-bar-chartist-chart").length) ChartistChart.stackedBar()
		if ($("#svg-animation-chartist-chart").length) ChartistChart.svgAnimation();
		return false;
	});

	ChartistChart = {
		area: function(){
			new Chartist.Line('#area-chartist-chart', {
				labels: [1, 2, 3, 4, 5, 6, 7, 8],
				series: [
					[5, 9, 7, 8, 5, 3, 5, 4]
				]
			}, {
				low: 0,
				showArea: true,
				fullWidth: true,
				axisY: {
					offset: 10
				}
			});
			return false;
		},
		bar: function(){
			new Chartist.Bar('#bar-chartist-chart', {
					labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'],
					series: [
						[5, 4, 3, 7],
						[3, 2, 9, 5],
						[1, 5, 8, 4],
						[2, 3, 4, 6],
						[4, 1, 2, 1]
					]
				}, {
				// Default mobile configuration
					stackBars: true,
					axisX: {
						labelInterpolationFnc: function(value) {
							return value.split(/\s+/).map(function(word) {
								return word[0];
							}).join('');
						}
					},
					axisY: {
						offset: 10
					}
				}, [
					// Options override for media > 400px
					['screen and (min-width: 400px)', {
						reverseData: true,
						horizontalBars: true,
						axisX: {
							labelInterpolationFnc: Chartist.noop
						},
						axisY: {
							offset: 20
						}
					}],
					// Options override for media > 800px
					['screen and (min-width: 800px)', {
						stackBars: false,
						seriesBarDistance: 10
					}],
					// Options override for media > 1000px
					['screen and (min-width: 1000px)', {
						reverseData: false,
						horizontalBars: false,
						seriesBarDistance: 15
					}]
				]);
			return false;
		},
		biPolarArea : function(){
			new Chartist.Line('#bi-polar-area-chartist-chart', {
				labels: [1, 2, 3, 4, 5, 6, 7, 8],
				series: [
					[1, 2, 3, 1, -2, 0, 1, 0],
					[-2, -1, -2, -1, -2.5, -1, -2, -1],
					[0, 0, 0, 1, 2, 2.5, 2, 1],
					[2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
				]
			}, {
				high: 3,
				low: -3,
				showArea: true,
				showLine: false,
				showPoint: false,
				fullWidth: true,
				axisY: {
					offset: 20
				},
				axisX: {
					showLabel: false,
					showGrid: false
				}
			});
			return false;
		},
		biPolarBar : function(){
			var data = {
					labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
					series: [
						[1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
					]
				};

			var options = {
				high: 10,
				low: -10,
				axisX: {
					labelInterpolationFnc: function(value, index) {
						return index % 2 === 0 ? value : null;
					}
				},
				fullWidth: true,
				axisY: {
					offset: 10
				},
			};

			new Chartist.Bar('#bi-polar-bar-chartist-chart', data, options);
			return false;
		},
		donut: function(){
			var data = {
				series: [20, 10, 30, 40]
			};

			var sum = function(a, b) { return a + b };

			new Chartist.Pie('#donut-bar-chartist-chart', data, {
				labelInterpolationFnc: function(value) {
					return Math.round(value / data.series.reduce(sum) * 100) + '%';
				},
				donut: true,
				donutWidth: 80,
				startAngle: 270,
			});
			return false;
		},
		donutAnimation: function(){
			var chart = new Chartist.Pie('#donut-animation-bar-chartist-chart', {
					series: [10, 20, 50, 20, 5, 50, 15],
					labels: [1, 2, 3, 4, 5, 6, 7]
				}, {
					donut: true,
					showLabel: false
				});

			chart.on('draw', function(data) {
				if(data.type === 'slice') {
					// Get the total path length in order to use for dash array animation
					var pathLength = data.element._node.getTotalLength();

					// Set a dasharray that matches the path length as prerequisite to animate dashoffset
					data.element.attr({
						'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
					});

					// Create animation definition while also assigning an ID to the animation for later sync usage
					var animationDefinition = {
						'stroke-dashoffset': {
							id: 'anim' + data.index,
							dur: 1000,
							from: -pathLength + 'px',
							to:  '0px',
							easing: Chartist.Svg.Easing.easeOutQuint,
							// We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
							fill: 'freeze'
						}
					};

					// If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
					if(data.index !== 0) {
						animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
					}

					// We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
					data.element.attr({
						'stroke-dashoffset': -pathLength + 'px'
					});

					// We can't use guided mode as the animations need to rely on setting begin manually
					// See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
					data.element.animate(animationDefinition, false);
				}
			});

			// For the sake of the example we update the chart every time it's created with a delay of 8 seconds
			chart.on('created', function() {
				if(window.__anim21278907124) {
					clearTimeout(window.__anim21278907124);
					window.__anim21278907124 = null;
				}
				window.__anim21278907124 = setTimeout(chart.update.bind(chart), 10000);
			});
			return false;
		},
		gauge: function(){
			new Chartist.Pie('#gauge-bar-chartist-chart', {
				series: [20, 10, 30, 40]
			}, {
				donut: true,
				donutWidth: 60,
				startAngle: 270,
				total: 200,
				showLabel: false
			});
			return false;
		},
		horizontalBar: function(){
			new Chartist.Bar('#horizontal-bar-chartist-chart', {
				labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
				series: [
					[5, 4, 3, 7, 5, 10, 3],
					[3, 2, 9, 5, 4, 6, 4]
				]
			}, {
				seriesBarDistance: 10,
				reverseData: true,
				horizontalBars: true,
				axisY: {
					offset: 70
				},
			});
			return false;
		},
		line: function(){
			new Chartist.Line('#line-chartist-chart', {
					labels: ['1', '2', '3', '4', '5'],
					series: [
						[12, 9, 7, 8, 5],
						[2, 1, 3.5, 7, 3],
						[1, 3, 4, 5, 6]
					]
				}, {
					fullWidth: true,
					axisY: {
						offset: 10
					},
					chartPadding: {
						right: 30
					}
				}
			);
			return false;
		},
		pie: function(){
			var data = {
				series: [5, 3, 4]
			};

			var sum = function(a, b) { return a + b };

			new Chartist.Pie('#pie-bar-chartist-chart', data, {
				labelInterpolationFnc: function(value) {
					return Math.round(value / data.series.reduce(sum) * 100) + '%';
				}
			});
			return false;
		},
		scatter: function(){
			var times = function(n) {
				return Array.apply(null, new Array(n));
			};

			var data = times(52).map(Math.random).reduce(function(data, rnd, index) {
					data.labels.push(index + 1);
					data.series.forEach(function(series) {
						series.push(Math.random() * 100)
					});

					return data;
				}, {
					labels: [],
					series: times(4).map(function() { return new Array() })
				});

			var options = {
					showLine: false,
					axisX: {
						labelInterpolationFnc: function(value, index) {
							return index % 13 === 0 ? 'W' + value : null;
						}
					},
					fullWidth: true,
					axisY: {
						offset: 20
					}
				};

			var responsiveOptions = [
					['screen and (min-width: 640px)', {
						axisX: {
							labelInterpolationFnc: function(value, index) {
								return index % 4 === 0 ? 'W' + value : null;
							}
						}
					}]
				];

			new Chartist.Line('#scatter-chartist-chart', data, options, responsiveOptions);
			return false;
		},
		smilAnimation: function(){
			var chart = new Chartist.Line('#smil-animation-chartist-chart', {
					labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
					series: [
						[12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
						[4,  5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
						[5,  3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
						[3,  4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
					]
				}, {
					low: 0
				});

			// Let's put a sequence number aside so we can use it in the event callbacks
			var seq = 0,
				delays = 80,
				durations = 500;

			// Once the chart is fully created we reset the sequence
			chart.on('created', function() {
				seq = 0;
			});

			// On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
			chart.on('draw', function(data) {
				seq++;

				if(data.type === 'line') {
					// If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
					data.element.animate({
						opacity: {
							// The delay when we like to start the animation
							begin: seq * delays + 1000,
							// Duration of the animation
							dur: durations,
							// The value where the animation should start
							from: 0,
							// The value where it should end
							to: 1
						}
					});
				} else if(data.type === 'label' && data.axis === 'x') {
					data.element.animate({
						y: {
							begin: seq * delays,
							dur: durations,
							from: data.y + 100,
							to: data.y,
							// We can specify an easing function from Chartist.Svg.Easing
							easing: 'easeOutQuart'
						}
					});
				} else if(data.type === 'label' && data.axis === 'y') {
					data.element.animate({
						x: {
							begin: seq * delays,
							dur: durations,
							from: data.x - 100,
							to: data.x,
							easing: 'easeOutQuart'
						}
					});
				} else if(data.type === 'point') {
					data.element.animate({
						x1: {
							begin: seq * delays,
							dur: durations,
							from: data.x - 10,
							to: data.x,
							easing: 'easeOutQuart'
						},
						x2: {
							begin: seq * delays,
							dur: durations,
							from: data.x - 10,
							to: data.x,
							easing: 'easeOutQuart'
						},
							opacity: {
							begin: seq * delays,
							dur: durations,
							from: 0,
							to: 1,
							easing: 'easeOutQuart'
						}
					});
				} else if(data.type === 'grid') {
					// Using data.axis we get x or y which we can use to construct our animation definition objects
					var pos1Animation = {
						begin: seq * delays,
						dur: durations,
						from: data[data.axis.units.pos + '1'] - 30,
						to: data[data.axis.units.pos + '1'],
						easing: 'easeOutQuart'
					};

					var pos2Animation = {
						begin: seq * delays,
						dur: durations,
						from: data[data.axis.units.pos + '2'] - 100,
						to: data[data.axis.units.pos + '2'],
						easing: 'easeOutQuart'
					};

					var animations = {};
					animations[data.axis.units.pos + '1'] = pos1Animation;
					animations[data.axis.units.pos + '2'] = pos2Animation;
					animations['opacity'] = {
						begin: seq * delays,
						dur: durations,
						from: 0,
						to: 1,
						easing: 'easeOutQuart'
					};

					data.element.animate(animations);
				}
			});

			// For the sake of the example we update the chart every time it's created with a delay of 10 seconds
			chart.on('created', function() {
				if(window.__exampleAnimateTimeout) {
					clearTimeout(window.__exampleAnimateTimeout);
					window.__exampleAnimateTimeout = null;
				}
				window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
			});
			return false;
		},
		smilAnimationIndex: function(){
			var chart = new Chartist.Line('#smil-animation-index-chartist-chart', {
					labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016'],
					series: [
						[8, 5, 4, 6, 2, 3, 3, 4, 6],
						[7, 3, 5, 5, 3, 4, 4, 5, 5],
					]
				}, {
					low: 0,
					fullWidth: true,
					chartPadding: {
						right: 30
					}
				});

			// Let's put a sequence number aside so we can use it in the event callbacks
			var seq = 0,
				delays = 80,
				durations = 500;

			// Once the chart is fully created we reset the sequence
			chart.on('created', function() {
				seq = 0;
			});

			// On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
			chart.on('draw', function(data) {
				seq++;

				if(data.type === 'line') {
					// If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
					data.element.animate({
						opacity: {
							// The delay when we like to start the animation
							begin: seq * delays + 1000,
							// Duration of the animation
							dur: durations,
							// The value where the animation should start
							from: 0,
							// The value where it should end
							to: 1
						}
					});
				} else if(data.type === 'label' && data.axis === 'x') {
					data.element.animate({
						y: {
							begin: seq * delays,
							dur: durations,
							from: data.y + 100,
							to: data.y,
							// We can specify an easing function from Chartist.Svg.Easing
							easing: 'easeOutQuart'
						}
					});
				} else if(data.type === 'label' && data.axis === 'y') {
					data.element.animate({
						x: {
							begin: seq * delays,
							dur: durations,
							from: data.x - 100,
							to: data.x,
							easing: 'easeOutQuart'
						}
					});
				} else if(data.type === 'point') {
					data.element.animate({
						x1: {
							begin: seq * delays,
							dur: durations,
							from: data.x - 10,
							to: data.x,
							easing: 'easeOutQuart'
						},
						x2: {
							begin: seq * delays,
							dur: durations,
							from: data.x - 10,
							to: data.x,
							easing: 'easeOutQuart'
						},
							opacity: {
							begin: seq * delays,
							dur: durations,
							from: 0,
							to: 1,
							easing: 'easeOutQuart'
						}
					});
				} else if(data.type === 'grid') {
					// Using data.axis we get x or y which we can use to construct our animation definition objects
					var pos1Animation = {
						begin: seq * delays,
						dur: durations,
						from: data[data.axis.units.pos + '1'] - 30,
						to: data[data.axis.units.pos + '1'],
						easing: 'easeOutQuart'
					};

					var pos2Animation = {
						begin: seq * delays,
						dur: durations,
						from: data[data.axis.units.pos + '2'] - 100,
						to: data[data.axis.units.pos + '2'],
						easing: 'easeOutQuart'
					};

					var animations = {};
					animations[data.axis.units.pos + '1'] = pos1Animation;
					animations[data.axis.units.pos + '2'] = pos2Animation;
					animations['opacity'] = {
						begin: seq * delays,
						dur: durations,
						from: 0,
						to: 1,
						easing: 'easeOutQuart'
					};

					data.element.animate(animations);
				}
			});

			// For the sake of the example we update the chart every time it's created with a delay of 10 seconds
			chart.on('created', function() {
				if(window.__exampleAnimateTimeout) {
					clearTimeout(window.__exampleAnimateTimeout);
					window.__exampleAnimateTimeout = null;
				}
				window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
			});
			return false;
		},
		stackedBar: function(){
			new Chartist.Bar('#stacked-bar-chartist-chart', {
				labels: ['Q1', 'Q2', 'Q3', 'Q4'],
				series: [
				[800000, 1200000, 1400000, 1300000],
				[200000, 400000, 500000, 300000],
				[100000, 200000, 400000, 600000]
				]
			}, {
				stackBars: true,
				axisY: {
					labelInterpolationFnc: function(value) {
						return (value / 1000) + 'k';
					}
				}
			}).on('draw', function(data) {
				if(data.type === 'bar') {
					data.element.attr({
						style: 'stroke-width: 30px'
					});
				}
			});
			return false;
		},
		svgAnimation: function(){
			var chart = new Chartist.Line('#svg-animation-chartist-chart', {
					labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
					series: [
						[1, 5, 2, 5, 4, 3],
						[2, 3, 4, 8, 1, 2],
						[5, 4, 3, 2, 1, 0.5]
					]
				}, {
					low: 0,
					showArea: true,
					showPoint: false,
					fullWidth: true,
					axisY: {
						offset: 10
					}
				});

			chart.on('draw', function(data) {
				if(data.type === 'line' || data.type === 'area') {
					data.element.animate({
						d: {
							begin: 2000 * data.index,
							dur: 2000,
							from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
							to: data.path.clone().stringify(),
							easing: Chartist.Svg.Easing.easeOutQuint
						}
					});
				}
			});
			return false;
		}
	}
})(jQuery);