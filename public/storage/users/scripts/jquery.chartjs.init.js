/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Chartist-Chart
 */

(function($) {
	"use strict";

	var ChartJs = {},
		randomScalingFactor = function() {
			return Math.round(Math.random() * 15) + 5;
		};

	$(document).ready(function(){
		ChartJs.bar('bar-chartjs-chart','top','bar');
		ChartJs.bar('horizontal-bar-chartjs-chart','right','horizontalBar');
		ChartJs.line('line-chartjs-chart',false);
		ChartJs.line('area-chartjs-chart',true);
		ChartJs.pie('pie-chartjs-chart','pie');
		ChartJs.pie('donut-chartjs-chart','doughnut');
		ChartJs.polar('polar-chartjs-chart');
		ChartJs.radar('radar-chartjs-chart');
		return false;
	});

	ChartJs = {
		bar: function(container,position,type){
			var barChartData = {
					labels: ["January", "February", "March", "April"],
					datasets: [{
						label: 'Dataset 1',
						backgroundColor: "rgba(249,200,81,0.3)",
						borderColor: "rgb(249, 200, 81)",
						borderWidth: 1,
						hoverBackgroundColor: "rgba(249,200,81,0.6)",
						hoverBorderColor: "rgb(249, 200, 81)",
						data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
					}, {
						label: 'Dataset 2',
						backgroundColor: "rgba(127, 193, 252, 0.3)",
						borderColor: "#7fc1fc",
						borderWidth: 1,
						hoverBackgroundColor: "rgba(127, 193, 252, 0.6)",
						hoverBorderColor: "#7fc1fc",
						data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
					}, {
						label: 'Dataset 3',
						backgroundColor: "rgba(245,112,122,0.3)",
						borderColor: "#f5707a",
						borderWidth: 1,
						hoverBackgroundColor: "rgba(245,112,122,0.6)",
						hoverBorderColor: "#f5707a",
						data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
					}]
				};

			var ctx = document.getElementById(container).getContext("2d"),
				skip = (type == "bar") ? "bottom" : "left" ;
			new Chart(ctx, {
				type: type,
				data: barChartData,
				options: {
					// Elements options apply to all of the options unless overridden in a dataset
					// In this case, we are setting the border of each bar to be 2px wide and green
					
					hover: {
						mode: 'label'
					},
					responsive: true,
					legend: {
						position: position,
					},
					scales: {
						xAxes: [{
							ticks: {
								beginAtZero:true
							},
						}],
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}],
					},

				}
			});
			return false;
		},
		line: function(container,fill){
			var lineData = {
					labels: ["0", "1", "2", "3","4","5","6","7","8","9","10"],
					datasets: [{
						label: 'Series 1',
						fill: fill,
						borderColor: "rgba(245,112,122,1)",
						pointBackgroundColor: "rgb(245,112,122)",
						backgroundColor: "rgba(245,112,122,0.3)",
						data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(),randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
					}]
				};
			var ctx = document.getElementById(container).getContext("2d");
			new Chart(ctx, {
				type: 'line',
				data: lineData,
				options: {
					hover: {
						mode: 'label'
					},
					responsive: true,
					scales: {
						xAxes: [{
							ticks: {
								beginAtZero:true
							}
						}],
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
			return false;
		},
		pie : function(container,type){
			var ctx = document.getElementById(container).getContext("2d"),
				config = {
					type: type,
					data: {
						datasets: [{
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
							],
							backgroundColor: [
								"#f9c851",
								"#3ac9d6",
								"#ebeff2",
							],
							hoverBackgroundColor: [
								"#f9c851",
								"#3ac9d6",
								"#ebeff2"
							],
							hoverBorderColor: "#fff"
						}],
						labels: [
							"Red",
							"Green",
							"Yellow",
						]
					},
					options: {
						responsive: true
					}
				};
			new Chart(ctx, config);
			return false;
		},
		polar: function(container){
			var ctx = document.getElementById(container).getContext("2d"),
				config = {
					data: {
						datasets: [{
							data: [
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
								randomScalingFactor(),
							],
							backgroundColor: [
								"#f5707a",
								"#188ae2",
								"#4bd396",
								"#8d6e63",
							],
							label: 'My dataset' // for legend
						}],
						labels: [
							"Red",
							"Blue",
							"Green",
							"Grey",
						]
					},
					options: {
						responsive: true,
						legend: {
							position: 'top',
						},
						scale: {
							ticks: {
								beginAtZero: true
							},
							reverse: false
						},
						animation: {
							animateRotate: false,
							animateScale: true
						}
					}
				};
			new Chart.PolarArea(ctx, config);
			return false;
		},
		radar: function(container){
			var ctx = document.getElementById(container).getContext("2d"),
				config = {
					type: 'radar',
					data: {
						labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
						datasets: [{
							label: "Peter",
							backgroundColor: "rgba(179,181,198,0.2)",
							borderColor: "rgba(179,181,198,1)",
							pointBackgroundColor: "rgba(179,181,198,1)",
							pointBorderColor: "#fff",
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: "rgba(179,181,198,1)",
							data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
						}, {
							label: "John",
							 backgroundColor: "rgba(255,99,132,0.2)",
							borderColor: "rgba(255,99,132,1)",
							pointBackgroundColor: "rgba(255,99,132,1)",
							pointBorderColor: "#fff",
							pointHoverBackgroundColor: "#fff",
							pointHoverBorderColor: "rgba(255,99,132,1)",
							data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
						},]
					},
					options: {
						legend: {
							position: 'top',
						},
						scale: {
							reverse: false,
							gridLines: {
								color: ['black', 'red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet']
							},
							ticks: {
								beginAtZero: true
							}
						}
					}
				};
			new Chart(ctx, config);
			return false;
		}
	}
	
})(jQuery);