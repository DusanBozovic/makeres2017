jQuery(function($) {

	var wW = $(window).width();
	if ( wW <= 1040 ) {
		$(window).scroll(function() {
			var st = $(window).scrollTop();
			if ( st > 0 ) {
				$('.header-wrapper').addClass('mini');
			} else {
				$('.header-wrapper').removeClass('mini');
			}
		});
	}

	var blockBody = function() {
		var b = $('body');
		if ( b.hasClass('no-scroll') ) {
			b.removeClass('no-scroll');
		} else {
			b.addClass('no-scroll');
		}
	}

	// Log-in form show/hide
	$('a.sign-in-popup').click(function() {
		$('#sign-in').toggle();
		blockBody();

		return false;
	});
	$('.close-sign-pop').click(function() {
		$(this).parent().parent().parent().hide();
		blockBody();
	});

	// Reset-password
	$('.password-reset').click(function() {
		$('#sign-in').hide();
		$('#reset-password').show();
		//blockBody();
		return false;
	});

	// Sign-up
	$('.button.sign-up').click(function() {
		$('#sign-in').hide();
		$('#sign-up').show();

		return false;
	});
	$('#sign-up .button.sign-in').click(function() {
		$('#sign-up').hide();
		$('#sign-in').show();

		return false;
	});

	// Complete profile
	$('button.complete-profile').click(function() {
		$('#complete-profile').toggle();
		blockBody();

		return false;
	});

	// Edit info
	$('.edit-info').click(function() {
		$('#edit-account').show();
		blockBody();

		return false;
	});

	// Mini cart show/hide
	$('.section-cart').click(function() {
		$('#mini-cart').toggle();

		return false;
	});
	$('body').click(function() {
		$('#mini-cart').click(function(e) {
			e.stopPropagation();
		});
		if ( $('#mini-cart').is(':visible') ) {
			$('#mini-cart').hide();
			//blockBody();
		}
	});
	$('.book-more').click(function(e) {
		e.stopPropagation();
		if ( $('#mini-cart').is(':visible') ) {
			$('#mini-cart').hide();
			//blockBody();
		}
	});

	// + more info buttons show/hide
	$('.more-room-info').click(function() {
		$(this).parent().parent().find('.pop-in-description-room').show();
		blockBody();
	});
	$('.more-rate-info').click(function() {
		$(this).parent().parent().find('.pop-in-rate-room').show();
		blockBody();
	});
	$('.close-pop').click(function(e) {
		$(this).parent().parent().parent().hide();
		e.stopPropagation();
		blockBody();
	});
	
	$('.pop-in-description-room, .pop-in-rate-room, .pop-in-privacy-policy, .pop-in-terms-and-conditions, .pop-in-cancellation-policy').click(function() {
		$(this).find('.popover-content-description').click(function(e) {
			e.stopPropagation();
		});
		$(this).hide();
		blockBody();
	});
	
	// Policies
	$('.show-privacy-policy').click(function() {
		$('.pop-in-privacy-policy').show();
		blockBody();
	});
	$('.show-terms-and-conditions').click(function() {
		$('.pop-in-terms-and-conditions').show();
		blockBody();
	});
	$('.show-cancellation-policy').click(function() {
		$('.pop-in-cancellation-policy').show();
		blockBody();
	});
	$('.show-room-block-policy').click(function() {
		$('.pop-in-room-block-policy').show();
		blockBody();
	});

	$('.show-privacy-policy-pu').click(function(event) {
		var $target = $(event.target);
		if(!$target.is(".pop-in-privacy-policy") || !$target.is(".pop-in-privacy-policy").children()) {
			//$("body").find(".pop-in-privacy-policy .close-pop").attr('class', 'close-pop-pu');
			//$("body").find(".popover-content-description").attr('class', 'popover-content-description-pu');
			$('.close-pop').click(function(event) {
				$("body").attr('class', 'no-scroll');
				$(this).parent().parent().parent().hide();
			});
			$('.pop-in-privacy-policy').click(function() {
				$(this).find('.popover-content-description').click(function(e) {
					e.stopPropagation();
				});
				$("body").attr('class', 'no-scroll');
				$(this).hide();
				//blockBody();
			});
		}
		$('.pop-in-privacy-policy').show();
		//blockBody();
	});
	$('.show-terms-and-conditions-pu').click(function(event) {
		var $target = $(event.target);
		if(!$target.is(".pop-in-terms-and-conditions") || !$target.is(".pop-in-terms-and-conditions").children()) {
			//$("body").find(".pop-in-privacy-policy .close-pop").attr('class', 'close-pop-pu');
			//$("body").find(".popover-content-description").attr('class', 'popover-content-description-pu');
			$('.close-pop').click(function(event) {
				$("body").attr('class', 'no-scroll');
				$(this).parent().parent().parent().hide();
			});
			$('.pop-in-terms-and-conditions').click(function() {
				$(this).find('.popover-content-description').click(function(e) {
					e.stopPropagation();
				});
				$("body").attr('class', 'no-scroll');
				$(this).hide();
				//blockBody();
			});
		}
		$('.pop-in-terms-and-conditions').show();
		//blockBody();
	});
	// Add room
	$('.add-room button').click(function() {
		var hook = $(this).attr('data-room');
		var headerHeight = $(".main-framework .header-wrapper").height();
		//$('[data-remove="' + hook + '"]').hide();
		$('[data-add="' + hook + '"]').show();

		$('html, body').animate({
			scrollTop: $('[id="' + hook + '"]').offset().top - headerHeight
		}, 1000);

		$('[data-add="' + hook + '"]').find('.continue').show();
	});
	// Next
	$('.showaddons').click(function() {
		var hook = $(this).parent().attr('data-add');
		$(this).parent().hide();
		$('[data-addon="' + hook + '"]').show();
	});
	// Skip
	$('.skip').click(function() {
		var hook = $(this).attr('data-room');
		$(this).parent().hide();
		$('[data-remove="' + hook + '"]').show();
	});
	$('.finishroom').click(function() {
		var hook = $(this).attr('data-room');
		$(this).parent().hide();
		$('[data-remove="' + hook + '"]').show();
	});
	// Check addon
	$('.addon-check').click(function() {
		$(this).find('.checker').toggleClass('checked');

		if( $('.checker').hasClass('checked') ) {
			$('.skip').hide();
			$('.continue').show();
		} else {
			$('.skip').show();
			$('.continue').hide();
		}
	});

	// Simple tabs init
	$('#tabs').tabs();

	// Simple accordion init
	$('#accordion').accordion({
		collapsible: true,
		active: false,
		heightStyle: 'content'
	});

	$('#accordion2').accordion({
		collapsible: true,
		animate: 500
	})
	.on('click', 'h4.ui-accordion-header', function(e) {
		$("h4.ui-accordion-header").each(function(i, el) {
			$(this).find(".panel-icon").text($(el).is('.ui-state-active') ? '-' : '+')
		})
	});

	$( "#accordion3" ).accordion({
		collapsible: true,
		active: false,
		animate: 500
	})
	.on("click", "h4.ui-accordion-header", function(e) {
		$("h4.ui-accordion-header").each(function(i, el) {
			$(this).find(".panel-icon").text($(el).is(".ui-state-active") ? "-" : "+")
		})
	});

//if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1)  { 
//	$( ".op-applepay" ).removeClass( "onlysafari" ).addClass( "activesafari" );
//}

	// Calendar
	//if ( !Modernizr.inputtypes.date ) {

		// helper functions
		function diff_days(from_date, to_date) {
			var checkin = moment(from_date, 'YYYY-MM-DD');
			var checkout = moment(to_date, 'YYYY-MM-DD');
			return checkout.diff(checkin, 'days');
		};
		function get_datepicker_formatted(datepicker) {
			return $.datepicker.formatDate('yy-mm-dd', datepicker);
		};
		function add_days(date, days) {
			return moment(date, 'YYYY-MM-DD').add(days, 'days').format('YYYY-MM-DD');
		};
		function subtract_days(date, days) {
			return moment(date, 'YYYY-MM-DD').subtract(days, 'days').format('YYYY-MM-DD');
		};
		function formatDate(date, format) {
			return moment(date)/*.locale($('#sch_lang').val())*/
				.format(format);
		};


		$('#input-service_date_arrival, #input-service_date_departure').datepicker({
			minDate: 0,
			beforeShow: customRange,
			beforeShowDay: setRange,
			onSelect: customRange,
			onClose: function(selectedDate, input) {
				if ( input.id == 'input-service_date_arrival' ) {
					var date = $(this).datepicker('getDate');
					if (date) {
						date.setDate(date.getDate() + 3);
					}
					$('#input-service_date_departure').datepicker('setDate', date);
					$('#input-service_date_departure').datepicker('show');
				}
			}
		});

		function customRange(input, inst) {
			// Add day attribute to every day cell before any other action
			setTimeout(function() {
				$('#ui-datepicker-div td').each(function() {
					$(this).attr('data-day', $(this).find('a:first').text());
				});
			}, 1);

			// First datepicker
			if ( input.id == 'input-service_date_arrival' ) {
				inst.dpDiv.css({
					marginTop: '7px',
					marginLeft: '-123px'
				});

				$("#ui-datepicker-div td").off();

				if (selectedDate != null) {
					$('#input-service_date_departure').datepicker('option', 'minDate', selectedDate).datepicker('refresh');
				}
			}

			// Second datepicker
			if (input.id == "input-service_date_departure") {
				inst.dpDiv.css({
					marginTop: '7px',
					marginLeft: '-150px'
				});

				$('body').on('mouseenter', '#ui-datepicker-div td:not(.ui-state-disabled)', function() {
					$(this).addClass('end-range');

					var day = parseInt($(this).attr('data-day'));
					var month = parseInt($(this).attr('data-month'));
					var year = parseInt($(this).attr('data-year'));
					// Get days diff
					var diff = diff_days(add_days(get_datepicker_formatted( new Date( $('#input-service_date_departure').datepicker('getDate') ) ), 1), year + '-' + (month + 1) + '-' + day);
					day -= 1; // Remove the current day
					while(diff > 0) {
						var day_diff = day - diff > 0 ? diff : day;

						for (var i = day_diff; i >= 0; i--) {
							$('#ui-datepicker-div').find('td[data-month="' + month + '"][data-day="' + (day - i) + '"]:not(.end-range)').addClass('highlight-day');
						};

						diff -= day;

						if( diff > 0 ) {
							//Check the prev month
							month--;
							day = $('#ui-datepicker-div').find('td[data-month="' + month + '"]:last').attr('data-day');
						}
					}

					$(this).parent().parent().parent().attr('id', 'departures');
					$(this).prevUntil('.end-range').addClass('highlight');
					$(this).prevAll('td:not(.ui-datepicker-unselectable)').addClass('highlight');
				});

				$('body').on('mouseleave', '#ui-datepicker-div td', function() {
					$(this).removeClass('end-range');
					$('.highlight-day').removeClass('highlight-day');
					$('#ui-datepicker-div td').removeClass('highlight');
				});

				var selectedDate = $('#input-service_date_arrival').datepicker('getDate');
				if (selectedDate != null) {
					$('#input-service_date_departure').datepicker('option', 'minDate', selectedDate).datepicker('refresh');
				}

				var disabledElem = $('td.ui-datepicker-week-end.ui-datepicker-unselectable.ui-state-disabled')[0];
				$('.ui-datepicker-current-day').prevUntil(disabledElem, 'td').css('background-color', 'red');
			}
		}

		function setRange(date) {
			// Date of the field being printed
			the_date = new Date(date).getTime();
			// Get range dates values
			var first = $('#input-service_date_arrival').datepicker('getDate');
			var second = $('#input-service_date_departure').datepicker('getDate');

			if ( first != null ) {
				first = first.getTime();
				second = second.getTime();

				if ( the_date == first ) {
					return [true, 'start-range', ''];
				} else if ( the_date == second ) {
					return [true, 'end-range', ''];
				} else if ( the_date > first && the_date < second ) {
					return [true, 'mid-range', ''];
				} else {
					return [true, ''];
				}
			} else {
				return [true, ''];
			}
		}

	//}

	// Qty buttons action
	$('.qty-plus').click(function() {
		var input = $(this).prev('input');
		var step = typeof input.attr('step') == 'undefined' ? 1 : parseInt( input.attr('step') );
		var max = typeof input.attr( 'max' ) == 'undefined' ? false : parseInt( input.attr('max') );
		var value = parseInt( input.val() );
		if( isNaN(max) ) {
			max = false;
		}
		value += step;
		if( max && ( value > max) ) {
			value  = max;
		}
		input.val( value );
		input.trigger('change');
	});
	$('.qty-minus').click(function() {
		var input = $(this).next('input');
		var step = typeof input.attr('step') == 'undefined' ? 1 : parseInt( input.attr('step') );
		var min = typeof input.attr('min') == 'undefined' ? 1 : parseInt( input.attr('min') );
		if( isNaN(min) ) {
			min = 1;
		}
		var value = parseInt( input.val() );
		value-= step;
		if( value < min ) {
			value  = min;
		}
		input.val(value);
		input.trigger('change');
	});

	// Booking & payment
	$('#billing-information .continue-edit').click(function() {
		$(this).parent().parent().parent().find('.edit').show();
		$(this).parent().parent().slideToggle();
		if ( $('#payment-information .mr-form').is(':hidden') ) {
			$('#payment-information .mr-form').slideToggle();
		}
	});
	/*$('#payment-information .continue-edit').click(function() {
		$(this).parent().parent().parent().find('.edit').show();
		$(this).parent().parent().slideToggle();
	});*/
	// Edit button
	$('.edit').click(function() {
		$(this).parent().parent().find('.mr-form').slideToggle();
		$(this).hide();
	});
	$('.change-name').click(function() {
		$(this).parent().hide();
		$('.change-guest-name').show();

		return false;
	});
	// Sidebar edit button
	$('.cart-sidebar .edit').click(function() {
		$('.cart-sidebar .mini-products').addClass('editable');

		return false;
	});
	$('.cart-sidebar .checkout').click(function() {
		$('.cart-sidebar .edit').show();
		$('.cart-sidebar .mini-products').removeClass('editable');
	});
	// Tooltip
	$('.tooltip .qmark').click(function() {
		$(this).parent().toggleClass('show-box');
	});
	// Promo buttons
	$('.promo-question').click(function() {
		var hook = $(this).attr('data-control');
		$(this).hide();
		$('.' + hook).show();
	});
	$('.submit-promo').click(function() {
		var vl = $('.promo-input').val();
		$('.promo-code').val(vl);
		$('.enter-promo').hide();
		$('.your-promo').show();
	});
	$('.your-promo .remove-item').click(function() {
		$('.your-promo').hide();
		$('.enter-promo').show();
	});
	// Change name
	$('.change-guest-name .apply-name-change').click(function() {
		var name = $('.change-first-name').val();
		var surname = $('.change-last-name').val();
		$('.first-guest-name').text(name);
		$('.last-guest-name').text(surname);
		$(this).parent().hide();
		$('.guest-promo').show();
	});

	// Cancellation textarea warning
	$('.cancellation-button').click(function() {
		if ( $(this).parent().parent().find('textarea[name="reason"]').val().length < 10 ) {
			$(this).parent().parent().find('.warning').show();

			return false;
		} else if ( $(this).parent().parent().find('.warning').is(':visible') ) {
			$(this).parent().parent().find('.warning').hide();
		}
	});

	// Mobile language menu
	$('body').on('click', '.toggler', function() {
		$(this).toggleClass('opposite');
		$('#menu-responsive-languages-menu').toggleClass('whole');
	});

	// User language menu
	$('body').on('click', '.switch', function() {
		$(this).toggleClass('opposite');
		$('.section-user .user-links').toggle();
	});

	// Responsive tables
	if ( wW <= 630 ) {
		$('.list-items-cart-rate').stacktable();
	}

	// Credit cards
	$('#credit-card').cardcheck({
		iconLocation: '#accepted-cards-images',
		allowSpaces: true,
		acceptedCards: [
			'visa',
			'mastercard',
			'amex',
			'discover'
		],
		iconDir: "images/cards/"
	});

	// Calendar inputs
	$('.cal-box').each(function() {
		var tw = $(this).width(),
			lw = $(this).find('label').width();
		$(this).find('input').css('width', tw - lw - 3);
	})

	if (wW >= 1200) {
		var docHeight = $(window).height();
		var footerHeight = $('.footer-wrapper').height();
		var footerTop = $('.footer-wrapper').position().top + footerHeight;

		if (footerTop < docHeight) {
			$('.footer-wrapper').css('margin-top', -100 + (docHeight - footerTop) + 'px');
		}
	}

});
