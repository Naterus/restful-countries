/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Google Maps
 */

(function($) {
	"use strict";

	if ($("#map-default").length){
		var mapCanvas = document.getElementById("map-default");
		var mapOptions = {
			center: new google.maps.LatLng(51.508742,-0.120850),
			zoom: 5
		};
		var map = new google.maps.Map(mapCanvas, mapOptions);
	}

	if ($("#map-marker").length){
		var mapCanvas = document.getElementById("map-marker");
		var mapOptions = {
			center: new google.maps.LatLng(51.508742,-0.120850),
			zoom: 5
		};
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(51.508742,-0.120850),
			animation:google.maps.Animation.BOUNCE
		});
		var map = new google.maps.Map(mapCanvas, mapOptions);
		marker.setMap(map);
	}

	if ($("#map-poly").length){
		var stavanger = new google.maps.LatLng(58.983991,5.734863);
		var amsterdam = new google.maps.LatLng(52.395715,4.888916);
		var london = new google.maps.LatLng(51.508742,-0.120850);

		var mapCanvas = document.getElementById("map-poly");
		var mapOptions = {center: amsterdam, zoom: 4};
		var map = new google.maps.Map(mapCanvas,mapOptions);

		var flightPath = new google.maps.Polyline({
			path: [stavanger, amsterdam, london],
			strokeColor: "#0000FF",
			strokeOpacity: 0.8,
			strokeWeight: 2
		});
		flightPath.setMap(map);
	}

	if ($("#map-polygon").length){
		var stavanger = new google.maps.LatLng(58.983991,5.734863);
		var amsterdam = new google.maps.LatLng(52.395715,4.888916);
		var london = new google.maps.LatLng(51.508742,-0.120850);

		var mapCanvas = document.getElementById("map-polygon");
		var mapOptions = {center: amsterdam, zoom: 4};
		var map = new google.maps.Map(mapCanvas,mapOptions);

		var flightPath = new google.maps.Polygon({
			path: [stavanger, amsterdam, london],
			strokeColor: "#0000FF",
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: "#0000FF",
			fillOpacity: 0.4
		});
		flightPath.setMap(map);
	}

	if($("#map-circle").length){
		var amsterdam = new google.maps.LatLng(52.395715,4.888916);

		var mapCanvas = document.getElementById("map-circle");
		var mapOptions = {center: amsterdam, zoom: 7};
		var map = new google.maps.Map(mapCanvas,mapOptions);

		var myCity = new google.maps.Circle({
			center: amsterdam,
			radius: 50000,
			strokeColor: "#0000FF",
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: "#0000FF",
			fillOpacity: 0.4
		});
		myCity.setMap(map);
	}

	if($("#map-info").length){
		var myCenter = new google.maps.LatLng(51.508742,-0.120850);
		var mapCanvas = document.getElementById("map-info");
		var mapOptions = {center: myCenter, zoom: 5};
		var map = new google.maps.Map(mapCanvas, mapOptions);
		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);

		var infowindow = new google.maps.InfoWindow({
			content: "Hello World!"
		});
		infowindow.open(map,marker);
	}

	if ($("#map-hybrid").length){
		var mapCanvas = document.getElementById("map-hybrid");
		var mapOptions = {
			center: new google.maps.LatLng(51.508742,-0.120850),
			zoom: 5,
			mapTypeId: google.maps.MapTypeId.HYBRID
		};
		var map = new google.maps.Map(mapCanvas, mapOptions);
	}

	if ($("#map-45").length){
		var mapCanvas = document.getElementById("map-45");
		var mapOptions = {
			center: new google.maps.LatLng(45.434046,12.340284),
			zoom:18,
			mapTypeId:google.maps.MapTypeId.HYBRID
		};
		var map = new google.maps.Map(mapCanvas,mapOptions);
	}

	if ($("#map-light-dream").length){
		var myCenter = new google.maps.LatLng(40.6700, -73.9400);
		var mapOptions = {
			zoom: 11,

			center: new google.maps.LatLng(40.6700, -73.9400),

			styles: [
				{
					"featureType": "landscape",
					"stylers": [
						{
							"hue": "#FFBB00"
						},
						{
							"saturation": 43.400000000000006
						},
						{
							"lightness": 37.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.highway",
					"stylers": [
						{
							"hue": "#FFC200"
						},
						{
							"saturation": -61.8
						},
						{
							"lightness": 45.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.arterial",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 51.19999999999999
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.local",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 52
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "water",
					"stylers": [
						{
							"hue": "#0078FF"
						},
						{
							"saturation": -13.200000000000003
						},
						{
							"lightness": 2.4000000000000057
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "poi",
					"stylers": [
						{
							"hue": "#00FF6A"
						},
						{
							"saturation": -1.0989010989011234
						},
						{
							"lightness": 11.200000000000017
						},
						{
							"gamma": 1
						}
					]
				}
			]
		};

		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map-light-dream');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
	}

	if ($("#map-blue-essence").length){
		var myCenter = new google.maps.LatLng(40.6700, -73.9400);
		var mapOptions = {
			zoom: 11,

			center: new google.maps.LatLng(40.6700, -73.9400),

			styles: [
				{
					"featureType": "landscape.natural",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#e0efef"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"hue": "#1900ff"
						},
						{
							"color": "#c0e8e8"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "geometry",
					"stylers": [
						{
							"lightness": 100
						},
						{
							"visibility": "simplified"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "labels",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "transit.line",
					"elementType": "geometry",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"lightness": 700
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "all",
					"stylers": [
						{
							"color": "#7dcdcd"
						}
					]
				}
			]
		};

		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map-blue-essence');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
	}

	if ($("#map-midnight-commander").length){
		var myCenter = new google.maps.LatLng(40.6700, -73.9400);
		var mapOptions = {
			zoom: 11,

			center: new google.maps.LatLng(40.6700, -73.9400),

			styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#146474"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#021019"}]}]
		};

		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map-midnight-commander');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
	}

	if ($("#map-flat").length){
		var myCenter = new google.maps.LatLng(40.6700, -73.9400);
		var mapOptions = {
			zoom: 11,

			center: new google.maps.LatLng(40.6700, -73.9400),

			styles: [{"featureType":"all","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"color":"#f3f4f4"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"weight":0.9},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#83cead"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"},{"color":"#fee379"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"on"},{"color":"#fee379"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#7fc8ed"}]}]
		};

		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map-flat');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
	}

})(jQuery);