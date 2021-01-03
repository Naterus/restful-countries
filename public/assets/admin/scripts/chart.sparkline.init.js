/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Morris-Chart
 */

(function($) {
	"use strict";

	var Chart = {};

	$(document).ready(function(){
		Chart.traffic();
		Chart.bar();
		Chart.pie();
		return false;
	});

	$(window).on("resize",function(){
		return false;
	});

	Chart = {
		traffic: function(){
			$("#traffic-sparkline-chart-1").sparkline("html", {
				width: "120",
				height: "35",
				lineColor: "#4d8cf4",
				fillColor: !1,
				spotColor: !1,
				minSpotColor: !1,
				maxSpotColor: !1,
				lineWidth: 1.15
			});
			$("#traffic-sparkline-chart-1").sparkline([0, 5, 3, 7, 5, 10, 3, 6, 5, 10], {
				width: "120",
				height: "35",
				lineColor: "#4d8cf4",
				fillColor: !1,
				spotColor: !1,
				minSpotColor: !1,
				maxSpotColor: !1,
				lineWidth: 1.15
			});
			$('#traffic-sparkline-chart-2').sparkline([1, 2, 3, 4, 5, 6, 7, 8, 10 , 12, 14], {
				type: 'bar',
				height: '35',
				barWidth: '5',
				resize: true,
				barSpacing: '5',
				barColor: '#00bf4f'
			});
			$('#traffic-sparkline-chart-3').sparkline([5,5, 6,6, 7,7,6,6, 7,7, 8,8,7,7, 8,8, 9,9,8,8, 9,9, 10,10,], {
				type: 'discrete',
				width: '120',
				height: '65',
				resize: true,
				lineColor:'#ff1744'
			});
		},
		bar : function () {
			$('#bar-sparkline-chart').sparkline([5, 6, 2, 8, 9, 4, 7, 10, 11, 12, 10, 9, 4, 7], {
				type: 'bar',
				height: '200',
				barWidth: '10',
				resize: true,
				barSpacing: '7',
				barColor: '#00aeff'
			});
			 $('#bar-sparkline-chart').sparkline([5, 6, 2, 8, 9, 4, 7, 10, 11, 12, 10, 9, 4, 7], {
				type: 'line',
				height: '200',
				lineColor: '#00aeff',
				fillColor: 'transparent',
				composite: true,
				highlightLineColor: 'rgba(0,0,0,.1)',
				highlightSpotColor: 'rgba(0,0,0,.2)'
			});
		},
		pie : function () {
			$('#pie-sparkline-chart').sparkline([50, 70, 60], {
				type: 'pie',
				width: '200',
				height: '200',
				resize: true,
				sliceColors: ['#fcb03b','#ea65a2','#566FC9']
			});
		}
	}
})(jQuery);