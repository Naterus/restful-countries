/**
 * Theme: Ninja Admin Template
 * Author: NinjaTeam
 * Module/App: Sweet Alert
 */

(function($) {
	"use strict";

	var alert = {};

	$(document).ready(function(){
		if ($("#sal-basic").length) alert.basic();
		if ($("#sal-text").length) alert.text();
		if ($("#sal-success").length) alert.success();
		if ($("#sal-warning").length) alert.warning();
		if ($("#sal-icon").length) alert.icon();
		if ($("#sal-html").length) alert.html();
		if ($("#sal-auto").length) alert.auto();
		if ($("#sal-prompt").length) alert.prompt();
		return false;
	});

	alert = {
		basic : function(){
			$("#sal-basic").on("click",function(){
				swal({
					title: "Here's a message!",
					confirmButtonColor: '#304ffe'
				});
				return false;
			});
			return false;
		},
		text: function(){
			$("#sal-text").on("click",function(){
				swal({
					title: "Here's a message!",
					text: "It's pretty, isn't it?",
					confirmButtonColor: '#304ffe'
				});
				return false;
			});
			return false;
		},
		success: function(){
			$("#sal-success").on("click",function(){
				swal({
					title: "Good job!",
					text: "You clicked the button!",
					type: 'success',
					confirmButtonColor: '#304ffe'
				});
				return false;
			});
			return false;
		},
		warning: function(){
			$("#sal-warning").on("click",function(){
				swal({   
					title: "Are you sure?",   
					text: "You will not be able to recover this imaginary file!",   
					type: "warning",   
					showCancelButton: true,   
					confirmButtonColor: "#DD6B55",   
					confirmButtonText: "Yes, delete it!", 
					cancelButtonText: "No, cancel plx!", 
					closeOnConfirm: false,
					closeOnCancel: false,
					confirmButtonColor: '#f60e0e',
				}, function(isConfirm){   
					if (isConfirm) {     
						swal({
							title : "Deleted!", 
							text: "Your imaginary file has been deleted.", 
							type: "success",
							confirmButtonColor: '#304ffe',
						});
					} else {  
						swal({
							title : "Cancelled", 
							text: "Your imaginary file is safe :)", 
							type: "error",
							confirmButtonColor: '#f60e0e',
						});
					} 
				});
				return false;
			});
			return false;
		},
		icon: function(){
			$("#sal-icon").on("click",function(){
				swal({   
					title: "Sweet!",   
					text: "Here's a custom image.",   
					imageUrl: "http://placehold.it/80x80",
					confirmButtonColor: '#304ffe',
				});
				return false;
			});
			return false;
		},
		html: function(){
			$("#sal-html").on("click",function(){
				swal({   
					title: "HTML <small>Title</small>!",   
					text: 'A custom <span style="color:#F8BB86">html<span> message.',   
					html: true ,
					confirmButtonColor: '#304ffe',
				});
				return false;
			});
			return false;
		},
		auto: function(){
			$("#sal-auto").on("click",function(){
				swal({   
					title: "Auto close alert!",   
					text: "I will close in 2 seconds.",   
					timer: 2000,   
					showConfirmButton: false
				});
				return false;
			});
			return false;
		},
		prompt: function(){
			$("#sal-prompt").on("click",function(){
				swal({
					title: "An input!",
					text: "Write something interesting:",
					type: "input",   showCancelButton: true,
					closeOnConfirm: false,
					animation: "slide-from-top",
					inputPlaceholder: "Write something" ,
					confirmButtonColor: '#304ffe',
				}, function(inputValue){
					if (inputValue === false) return false;
					if (inputValue === "") {
						swal({   
							title: "You need to write something!",
							type: 'error' ,
							confirmButtonColor: '#f60e0e',
						});
						return false
					}
					swal({   
							title: "Nice!",
							text: "You wrote: " + inputValue,
							type: 'success' ,
							confirmButtonColor: '#304ffe',
						});
				});
				return false;
			});
			return false;
		},
	}


})(jQuery);