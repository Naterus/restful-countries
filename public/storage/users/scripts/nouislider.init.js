/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: noUIslider
 */

(function($) {
	"use strict";

	var slider = {};

	$(document).ready(function(){
		if ($("#noui-connect").length) slider.connect();
		if ($("#noui-html5").length) slider.html5();
		if ($("#noui-slider1").length) slider.lock();
		return false;
	});

	slider = {
		connect : function(){
			var connectSlider = document.getElementById('noui-connect');

			noUiSlider.create(connectSlider, {
				start: [20, 80],
				connect: false,
				range: {
					'min': 0,
					'max': 100
				}
			});

			var connectBar = document.createElement('div'),
				connectBase = connectSlider.querySelector('.noUi-base');

			// Give the bar a class for styling and add it to the slider.
			connectBar.className += 'connect';
			connectBase.appendChild(connectBar);

			connectSlider.noUiSlider.on('update', function( values, handle, a, b, handlePositions ) {

				var offset = handlePositions[handle];

				// Right offset is 100% - left offset
				if ( handle === 1 ) {
					offset = 100 - offset;
				}

				// Pick left for the first handle, right for the second.
				connectBar.style[handle ? 'right' : 'left'] = offset + '%';
			});
			return false;
		},
		html5: function(){
			var select = document.getElementById('noui-select');

			// Append the option elements
			for ( var i = -20; i <= 40; i++ ){

				var option = document.createElement("option");
					option.text = i;
					option.value = i;

				select.appendChild(option);
			}

			//Initializing the slider
			var html5Slider = document.getElementById('noui-html5');

			noUiSlider.create(html5Slider, {
				start: [ 10, 30 ],
				connect: true,
				range: {
					'min': -20,
					'max': 40
				}
			});

			//Linking the select and input
			var inputNumber = document.getElementById('noui-input-number');

			html5Slider.noUiSlider.on('update', function( values, handle ) {

				var value = values[handle];

				if ( handle ) {
					inputNumber.value = value;
				} else {
					select.value = Math.round(value);
				}
			});

			select.addEventListener('change', function(){
				html5Slider.noUiSlider.set([this.value, null]);
			});

			inputNumber.addEventListener('change', function(){
				html5Slider.noUiSlider.set([null, this.value]);
			});
			return false;
		},
		lock: function(){
			// Store the locked state and slider values.
			var lockedState = false,
				lockedSlider = false,
				lockedValues = [60, 80],
				slider1 = document.getElementById('noui-slider1'),
				slider2 = document.getElementById('noui-slider2'),
				lockButton = document.getElementById('noui-lockbutton'),
				slider1Value = document.getElementById('noui-slider1-span'),
				slider2Value = document.getElementById('noui-slider2-span');

			// When the button is clicked, the locked
			// state is inverted.
			lockButton.addEventListener('click', function(){
				lockedState = !lockedState;
				this.textContent = lockedState ? 'unlock' : 'lock';
			});

			noUiSlider.create(slider1, {
				start: 60,

				// Disable animation on value-setting,
				// so the sliders respond immediately.
				animate: false,
				range: {
					min: 50,
					max: 100
				}
			});

			noUiSlider.create(slider2, {
				start: 80,
				animate: false,
				range: {
					min: 50,
					max: 100
				}
			});

			slider1.noUiSlider.on('update', function( values, handle ){
				slider1Value.innerHTML = values[handle];
			});

			slider2.noUiSlider.on('update', function( values, handle ){
				slider2Value.innerHTML = values[handle];
			});



			slider1.noUiSlider.on('change', setLockedValues);
			slider2.noUiSlider.on('change', setLockedValues);

			// The value will be send to the other slider,
			// using a custom function as the serialization
			// method. The function uses the global 'lockedState'
			// variable to decide whether the other slider is updated.
			slider1.noUiSlider.on('slide', function( values, handle ){
				crossUpdate(values[handle], slider2);
			});

			slider2.noUiSlider.on('slide', function( values, handle ){
				crossUpdate(values[handle], slider1);
			});

			function crossUpdate ( value, slider ) {

				// If the sliders aren't interlocked, don't
				// cross-update.
				if ( !lockedState ) return;

				// Select whether to increase or decrease
				// the other slider value.
				var a = slider1 === slider ? 0 : 1, b = a ? 0 : 1;

				// Offset the slider value.
				value -= lockedValues[b] - lockedValues[a];

				// Set the value
				slider.noUiSlider.set(value);
				return false;
			}

			function setLockedValues ( ) {
				lockedValues = [
					Number(slider1.noUiSlider.get()),
					Number(slider2.noUiSlider.get())
				];
				return false;
			}
			return false;
		}
	}



})(jQuery);