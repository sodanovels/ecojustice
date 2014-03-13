/* --------------------------------------------------

	ui
	
-------------------------------------------------- */
var UI = (function ($) {
    var jk = {};
    jk.config = {
    	winW: $(window).outerWidth(),
    	winH: $(window).outerHeight(),
    	$viewport: $(".viewport"),
    	$sliders: $(".slider"),
    	$nvpMenu_toggle: $(".menu")
    };
    jk.init = function () {
    	//jk.window();
    	jk.viewport();
    	jk.ui.nvpMenu();
    	jk.ui.simpleToggle();
		jk.flexslider();
    };
    jk.viewport = function () {
    	var h = jk.config.winH;    	
    	
    };
    jk.window = function () {
    	var $window = $(window);
    	
    	$window.resize(function () {
    		jk.config.winH = $window.outerHeight();
    		jk.viewport();
    	});
    }
  	jk.ui = {
  		nvpMenu : function () {
	  		var _viewport = jk.config.$viewport,
	  			_toggle = jk.config.$nvpMenu_toggle;	  		
	  		_toggle.on("click", this, function(e) {
	  			e.preventDefault();
	  			_viewport.toggleClass("shift");
	  		});
	  		
  		},
  		simpleToggle : function () {
  			var _toggler = $(".toggler");
  			
  			_toggler.on("click", this, function(e) {
	  			e.preventDefault();
	  			var _target = $(this).attr("data-ref");
	  			$(this).toggleClass("on");
	  			$(_target).toggleClass("on");
	  			
  			});
  		}
  		

  	};
   	jk.flexslider = function () {
  		jk.config.$sliders.flexslider({
			selector: ".slides .pane",
	    	animation: "slide",
	    	useCSS: true,
	    	easing: "cubic-bezier(.94,.06,.32,1)",
	    	slideshow: false,
	    	animationLoop: false,
	    	animationSpeed: 360,
	    	before: function(slider){
		    	//UI.scrollPage(slider, 56, 360);
		    	//jk.config.$viewport.removeClass("shift");
	    	}, 
	  	});
  	};
  	jk.scrollPage = function (i, o, d) {
		var y = $(i).offset().top - o;
  		$('html, body').animate({
			scrollTop: y
		}, {duration: d, queue: false});
  	};
    return jk;
})(jQuery);




/*
	start it up
*/
// ################################################################################
jQuery(function ($) {

	UI.init();
/*
	Facebook Graph
*/
    $.getJSON( "http://graph.facebook.com/ecojustice/", function( data ) {
      var likes;
      $.each( data, function( key, val ) {
	if (key === 'likes') {
	    likes = val;
	}
	else{
	    //Do nothing
	}
      });
     $('.facebookLikes').html(likes);
      
    });

});