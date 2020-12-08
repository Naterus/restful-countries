/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Morris-Chart
 */

(function($) {
	"use strict";

	var MorrisChart = {},
		graph;

	$(document).ready(function(){
		if ($("#area-morris-chart").length) MorrisChart.area.init();
		if ($("#bar-morris-chart").length) MorrisChart.bar.init();
		if ($("#donut-morris-chart").length) MorrisChart.donut.init();
		if ($("#lines-morris-chart").length) MorrisChart.lines.init();
		if ($("#realtime-morris-chart").length) MorrisChart.realtime.init();
		if ($("#stack-morris-chart").length) MorrisChart.stack.init();
		if ($("#realtime-morris-chart").length) {
			setInterval(function updateRandom() {
				MorrisChart.realtime.update();
			}, 500); 
		}
		return false;
	});

	$(window).on("resize",function(){
		if ($("#area-morris-chart").length) MorrisChart.area.update();
		if ($("#bar-morris-chart").length) MorrisChart.bar.update();
		if ($("#donut-morris-chart").length) MorrisChart.donut.update();
		if ($("#lines-morris-chart").length) MorrisChart.lines.update();
		if ($("#stack-morris-chart").length) MorrisChart.stack.update();
		return false;
	});

	MorrisChart = {
		area : {
			graph : null,
			data : [
				{x: '2010', y: 10, z: 10},
				{x: '2011', y: 9, z: 8},
				{x: '2012', y: 9, z: 11},
				{x: '2013', y: 13, z: 10},
				{x: '2014', y: 15, z: 13},
				{x: '2015', y: 12, z: 14},
				{x: '2016', y: 13, z: 18}
			],
			init: function(){
				MorrisChart.area.graph = Morris.Area({
					element: 'area-morris-chart',
					behaveLikeLine: true,
					data: MorrisChart.area.data,
					xkey: 'x',
					ykeys: ['y', 'z'],
					labels: ['Sales', 'Salary'],
					pointSize: 0,
					pointStrokeColors:['#fcb03b', '#ea65a2'],
					behaveLikeLine: true,
					gridLineColor: '#eee',
					lineWidth: 0,
					smooth: true,
					hideHover: 'auto',
					lineColors: ['#fcb03b', '#ea65a2'],
					resize: true,
					gridTextColor:'#2f2c2c',
				});
				return false;
			},
			update: function(){
				MorrisChart.area.graph.setData(MorrisChart.area.data);
				return false;
			}
		},
		bar : {
			graph : null,
			data: [
				{x: '2010', y: 10, z: 17, a: 9},
				{x: '2011', y: 5, z: 14, a: 13},
				{x: '2012', y: 5, z: 13, a: 12},
				{x: '2013', y: 6, z: 12, a: 5},
				{x: '2014', y: 17, z: 8, a: 8},
				{x: '2015', y: 10, z: 14, a: 18},
				{x: '2016', y: 8, z: 17, a: 14}
			],
			init: function(){
				Morris.Bar({
					element: 'bar-morris-chart',
					behaveLikeLine: true,
					data: MorrisChart.bar.data,
					barColors: [
						'#fcb03b',
						'#ea65a2',
						'#566FC9'
					],
					xkey: 'x',
					ykeys: ['y', 'z','a'],
					labels: ['Series A', 'Series B','Series C']
				});
				return false;
			},
			update: function(){
				MorrisChart.bar.graph.setData(MorrisChart.bar.data);
				return false;
			}
		},
		donut : {
			graph : null,
			data : [
				{value: 40, label: 'Series A'},
				{value: 20, label: 'Series B'},
				{value: 30, label: 'Series C'}
			],
			init: function(){
				Morris.Donut({
					element: 'donut-morris-chart',
					data: MorrisChart.donut.data,
					colors: [
						'#fcb03b',
						'#ea65a2',
						'#566FC9'
					],
					resize: true,
					labelColor: '#2f2c2c',
					formatter: function (x) { return x + "%"}
				});
				return false;
			},
			update: function(){
				MorrisChart.donut.graph.setData(MorrisChart.donut.data);
				return false;
			}
		},
		lines : {
			graph : null,
			data : [
				{x: '2010', y: 10, z: 17},
				{x: '2011', y: 5, z: 14},
				{x: '2012', y: 5, z: 13},
				{x: '2013', y: 6, z: 12},
				{x: '2014', y: 17, z: 8},
				{x: '2015', y: 10, z: 14},
				{x: '2016', y: 8, z: 17}
			],
			init: function(){
				Morris.Line({
					element: 'lines-morris-chart',
					behaveLikeLine: true,
					data: MorrisChart.lines.data,
					xkey: 'x',
					ykeys: ['y', 'z'],
					labels: ['Upload', 'Download'],
					lineColors: [
						'#fcb03b',
						'#ea65a2'
					],
					pointSize: 1,
					pointStrokeColors:['#fcb03b'],
					behaveLikeLine: true,
					gridLineColor: '#eee',
					gridTextColor:'#2f2c2c',
					lineWidth: 2,
					smooth: true,
					hideHover: 'auto',
					resize: true,
				});
				return false;
			},
			update: function(){
				MorrisChart.lines.graph.setData(MorrisChart.lines.data);
				return false;
			}
		},
		realtime :{
			data: [
				{x: '0', y: 10},
				{x: '1', y: 5},
				{x: '2', y: 5},
				{x: '3', y: 6},
				{x: '4', y: 17},
				{x: '5', y: 10},
				{x: '6', y: 12},
				{x: '7', y: 15},
				{x: '8', y: 9},
				{x: '9', y: 6},
				{x: '10', y: 15},
				{x: '11', y: 14},
				{x: '12', y: 5},
				{x: '13', y: 12},
				{x: '14', y: 16},
				{x: '15', y: 5},
				{x: '16', y: 10},
				{x: '17', y: 8},
				{x: '18', y: 8},
				{x: '19', y: 8},
				{x: '20', y: 6},
			],
			init : function(){
				graph = Morris.Line({
					element: 'realtime-morris-chart',
					data: MorrisChart.realtime.data,
					xkey: 'x',
					ykeys: ['y'],
					axes: 'y',
					labels: ['Visitors Online'],
					parseTime: false,
					pointSize: 1,
					pointStrokeColors:['#fcb03b'],
					behaveLikeLine: true,
					gridLineColor: '#eee',
					gridTextColor:'#2f2c2c',
					lineWidth: 2,
					smooth: true,
					hideHover: 'auto',
					lineColors: ['#fcb03b'],
					resize: true,
				});
				return false;
			},
			update: function(){
				var random = Math.floor((Math.random() * 20) + 1),
					i;
				for (i = 0; i < MorrisChart.realtime.data.length - 1; i++){
					MorrisChart.realtime.data[i].y = MorrisChart.realtime.data[i + 1].y;
				}
				MorrisChart.realtime.data[MorrisChart.realtime.data.length - 1].y = random;
				graph.setData(MorrisChart.realtime.data);
				return false;
			}
		},
		stack : {
			graph : null,
			data: [
				{x: '2010', y: 10, z: 17},
				{x: '2011', y: 5, z: 14},
				{x: '2012', y: 5, z: 13},
				{x: '2013', y: 6, z: 12},
				{x: '2014', y: 17, z: 8},
				{x: '2015', y: 10, z: 14},
				{x: '2016', y: 8, z: 17}
			],
			init : function(){
				Morris.Bar({
					element: 'stack-morris-chart',
					behaveLikeLine: true,
					data: MorrisChart.stack.data,
					xkey: 'x',
					ykeys: ['y', 'z'],
					labels: ['Series A', 'Series B'],
					stacked: true,
					barColors: [
						'#ea65a2',
						'#566FC9'
					],
				});
				return false;
			},
			update: function(){
				MorrisChart.stack.graph.setData(MorrisChart.stack.data);
				return false;
			}
		},
	}
})(jQuery);