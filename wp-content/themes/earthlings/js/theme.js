/**
 * Theme: Earthlings
 *
 * Javascript for touch-enabled carousels and smooth scrolling internal links.
 *
 * @package earthlings
 */

( function( $ ) {

	// Touchscreen swipe through carousel (slider)
	$(document).ready(function() {
	   if ($.mobile) {
			//must target by ID, so these need to be used in your content
			$('#myCarousel, #myCarousel2, #agnosia-bootstrap-carousel, #carousel-example-generic').swiperight(function() {
				$(this).carousel('prev');
			});
			$('#myCarousel, #myCarousel2, #agnosia-bootstrap-carousel, #carousel-example-generic').swipeleft(function() {
				$(this).carousel('next');
			});
		}
	});

	// Smooth scroll to anchor within the page
	$(document).ready(function() {
		$('.smoothscroll').click(function() {
		  var target = $(this.hash);
		  var offset = $('body').css('padding-top');
		  if (offset) offset = offset.replace('px','');
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: ( target.offset().top - offset )
			}, 1000);
			return false;
		  }
		});
	});

	// Put anything added to content by plugins at the end. This way our sub-pages and
	// recent post sections, etc. appear before it.
	$(document).ready(function() {
		$( '#xsbf-after-content' ).wrapAll( '<div id="xsbf-after-content-wrapper" />' );
		$( '#xsbf-entry-content' ).append( $( '#xsbf-after-content-wrapper' ) );
	});

	// Home animation
	$(document).ready(function() {
		var velocity = 300;
		// Home page
		if ($('.home-illustration').length) {
			setTimeout(function() {
				// HOME - Jump in animation
				$('.anim-jump').animate({'opacity': 1}, velocity, function() {
					setTimeout(function() {
						$('.anim-jump').animate({'opacity': 0}, velocity);
						$('.anim-mid-jump').animate({'opacity': 1}, velocity, function() {
							setTimeout(function() {
								$('.anim-mid-jump').animate({'opacity': 0}, velocity);
								$('.anim-earth, .anim-blink').animate({'opacity': 1}, velocity);
							}, velocity);
						});
					}, velocity);
				});
				// HOME - Turn animation
				var side = true;
				setInterval(function() {
					if (side) {
						$('.anim-turn').animate({'opacity': 1}, velocity);
						$('.anim-earth, .anim-blink').animate({'opacity': 0}, velocity, function() {
							setTimeout(function() {
								$('.anim-turn').animate({'opacity': 0}, velocity);
								$('.anim-earth, .anim-blink').animate({'opacity': 1}, velocity);
							}, velocity);
						});
						side = false;
					} else {
						$('.anim-turn-r').animate({'opacity': 1}, velocity);
						$('.anim-earth, .anim-blink').animate({'opacity': 0}, velocity, function() {
							setTimeout(function() {
								$('.anim-turn-r').animate({'opacity': 0}, velocity);
								$('.anim-earth, .anim-blink').animate({'opacity': 1}, velocity);
							}, velocity);
						});
						side = true;
					}
				}, velocity * 40);
			}, velocity * 10);
		// Access Consciousness
		} else if ($('.access-consciousness-illustration').length) {
			$('.anim-dan, .anim-stalk').animate({'opacity': 1}, velocity);
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i).animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity * 2).animate({'opacity': 0}, velocity);
				});
				if (i == 6) i = 0; else i++;
			}, velocity * 3);
			setTimeout(function() {
				setInterval(function() {
					var r = Math.floor( (Math.random() * $('.anim-dan .pin').length) + 1 );
					$('.anim-dan .pin').eq(r).addClass('float');
					setTimeout(function() {
						$('.anim-dan .pin').eq(r).removeClass('ease float').css('opacity', 0).animate({'opacity': 1}, velocity, function() { $(this).addClass('ease') });
					}, velocity * 10);
				}, velocity * 10);
			}, velocity * 6);
		// Access Bars
		} else if ($('.access-bars-illustration').length) {
			$('.anim-earth, .anim-blink').animate({'opacity': 1}, velocity);
		// Art Based Therapies
		} else if ($('.art-based-therapies-illustration').length) {
			$('.anim-earth, .anim-tilt, .anim-stars').animate({'opacity': 1}, velocity);
		// Dance Movement Therapy
		} else if ($('.dance-movement-therapy-illustration').length) {
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i).animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity * 2).animate({'opacity': 0}, velocity);
				});
				if (i == 3) i = 0; else i++;
			}, velocity * 3);
		// Drum Circles
		} else if ($('.drum-circles-illustration').length) {
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i).animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity * 2).animate({'opacity': 0}, velocity);
				});
				if (i == 2) i = 0; else i++;
			}, velocity * 3);
		// Group Theatre
		} else if ($('.group-theatre-illustration').length) {
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i).animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity * 2).animate({'opacity': 0}, velocity);
				});
				if (i == 2) i = 0; else i++;
			}, velocity * 3);
		// Spoken Word
		} else if ($('.spoken-word-illustration').length) {
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i).animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity * 2).animate({'opacity': 0}, velocity);
				});
				if (i == 3) i = 0; else i++;
			}, velocity * 3);
		// Story Telling
		} else if ($('.story-telling-illustration').length) {
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i).animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity * 2).animate({'opacity': 0}, velocity);
				});
				if (i == 2) i = 0; else i++;
			}, velocity * 3);
		// Clinical Hypnotherapy
		} else if ($('.clinical-hypnotherapy-illustration').length) {
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i).animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity * 2).animate({'opacity': 0}, velocity);
				});
				if (i == 5) i = 0; else i++;
			}, velocity * 3);
		// Visual Art Therapy
		} else if ($('.visual-art-therapy-illustration').length) {
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i).animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity * 2).animate({'opacity': 0}, velocity);
				});
				if (i == 2) i = 0; else i++;
			}, velocity * 3);
		// Community Events
		} else if ($('.community-events-illustration').length) {
			var i = 0;
			setInterval(function() {
				$('.anim-step-' + i + ' g').animate({'opacity': 1}, velocity, function() {
					$(this).delay(velocity).animate({'opacity': 0}, velocity);
				});
				if (i == 2) i = 0; else i++;
			}, velocity * 2);
			setInterval(function() {
				$('.anim-step-0, .anim-step-1, .anim-step-2').addClass('ease').css({'transform': 'translateX(1200px)'});
				setTimeout(function() {
					$('.anim-step-0, .anim-step-1, .anim-step-2').removeClass('ease').css({'transform': 'translateX(0px)', 'opacity': 0});
					$('.anim-step-0, .anim-step-1, .anim-step-2').delay(velocity).animate({'opacity': 1}, velocity);
				}, velocity * 15);
			}, velocity * 30);
		// About and other pages
		} else {
			$('.anim-earth, .anim-tilt').animate({'opacity': 1}, velocity);
		}
	});

	// Gradient
	$(document).ready(function() {
		setInterval(function() {
			$('a, button, html input[type="button"], input[type="submit"]').css('color', 'rgb(' + Math.floor(Math.random() * 255) + ',' + Math.floor(Math.random() * 255) + ',' + Math.floor(Math.random() * 255) + ')');
		}, 12000);
	});

	// Bootstrap calendar table fix
	/*$(document).ready(function() {
		setInterval( function() { $('.em-calendar').addClass('table-striped table'); }, 300 );
	});*/

	// Bootstrap footer login form fix
	$(document).ready(function() {
		$('#loginform .login-username, #loginform .login-password').addClass('form-group').find('input[type="text"], input[type="password"]').addClass('form-control');
		$('#loginform .login-remember').addClass('checkbox');
	});

	// Newsletter fix
	$('.newsletter .newsletter-email').addClass('form-control');

	// Remove <p> around images on post page
	$('.post:not(.home-post-block) p:has(img)').contents().unwrap();

} )( jQuery );
