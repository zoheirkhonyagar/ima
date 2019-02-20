(function( $ ) {
	
	window.btGetNavHTML = function( count ) {
		var html = '<div class="btAnimNavHolder"><ul class="btAnimNav">';
		html += '<li class="btAnimNavPrev">';
		for ( var i = 0; i < count; i++ ) {
			html += '<li class="btAnimNavDot" data-count="' + i + '">';
		}
		html += '<li class="btAnimNavNext">';
		html += '</ul></div>';
		
		return html;
	}

	/* Animate elements */

	function btAnimateElements() {
		var $elems = $( '.btCounter:not(.animated), .btProgressBar:not(.animated)' );
		// classic animations
		$elems.each(function() {
			$elm = $( this );
			if ( 
			( $elm.isOnScreen() && ! $( 'body' ).hasClass( 'impress-enabled' ) ) ||
			( $elm.isOnScreen() && $( 'body' ).hasClass( 'impress-enabled' ) && $elm.closest( '.boldSection' ).hasClass( 'active' ) )
			) {
				$elm.addClass( 'animated' );
				if ( $elm.hasClass( 'btCounter' ) ) {
					btAnimateCounter( $elm );
				}
				if ( $elm.hasClass( 'btProgressBar' ) ) {
					btAnimateProgress( $elm );
				}
			}
		});
	}
	
	function btAnimateCounter( elm ) {
		var number_length = elm.data( 'digit-length' );
		for ( var i = parseInt( number_length ); i > 0; i-- ) {
			var digit = elm.children( '.p' + i ).data( 'digit' );
			for ( var j = 0; j <= parseInt( digit ); j++ ) {
				elm.children( '.p' + i ).children( '.n' + j ).css( 'transform', 'translateY(-' + parseInt( digit ) * elm.height() + 'px)' );
			}
			
		}
		return false;
	}
	
	function btAnimateCounterReset( elm ) {
		var number_length = elm.data( 'digit-length' );
		for ( var i = parseInt( number_length ); i > 0; i-- ) {
			var digit = elm.children( '.p' + i ).data( 'digit' );
			for ( var j = 0; j <= parseInt( digit ); j++ ) {
				elm.children( '.p' + i ).children( '.n' + j ).css( 'transform', 'translateY(0px)' );
			}
			
		}
		return false;
	}	

	function btAnimateProgress( elm ) {
		elm.find( '.btProgressAnim' ).css( 'transition-delay', Math.round( Math.random() * 250 ) + 'ms' );
		elm.find( '.btProgressAnim' ).css( 'transform', 'translateX(-' + ( 100 - elm.find( '.btProgressAnim' ).data( 'percentage' ) ) + '%)' );
		return false;
	}
	
	function btAnimateProgressReset( elm ) {
		elm.find( '.btProgressAnim' ).css( 'transition-delay', Math.round( Math.random() * 250 ) + 'ms' );
		elm.find( '.btProgressAnim' ).css( 'transform', 'translateX(-100%)' );
		return false;
	}	
	
	$( window ).on( 'btload', function() {
		if ( ! $( 'body' ).hasClass( 'btPageTransitions' ) ) {
			btAnimateElements();
			$( window ).scroll(function(){
				btAnimateElements();
			});
		}
	});
	
	$( window ).on( 'bt_section_animation_end', function( e, el ) {
		$( 'span.headline u, span.headline b, span.headline i' ).addClass( 'animate' );
		var $elems = $( el ).find( '.btCounter, .btProgressBar, span.headline u, span.headline b, span.headline i' );
		// classic animations
		$elems.each(function() {
			$elm = $( this );
			$elm.addClass( 'animated' );
			if ( $elm.hasClass( 'btCounter' ) ) {
				btAnimateCounter( $elm );
			}
			if ( $elm.hasClass( 'btProgressBar' ) ) {
				btAnimateProgress( $elm );
			}
		});
	});
	
	$( window ).on( 'bt_section_animation_out', function( e, el ) {
		var $elems = $( el ).find( '.btCounter, .btProgressBar, span.headline u, span.headline b, span.headline i' );
		// classic animations
		$elems.each(function() {
			$elm = $( this );
			$elm.removeClass( 'animated' );
			if ( $elm.hasClass( 'btCounter' ) ) {
				btAnimateCounterReset( $elm );
			}
			if ( $elm.hasClass( 'btProgressBar' ) ) {
				btAnimateProgressReset( $elm );
			}
		});
	});	
	
	/* Accordions and tabs */

	$( document ).ready(function () {
		
		/* Accordions */

		$( '.tabsVertical .tabAccordionContent' ).hide();
		
		$( '.tabsVertical .tabAccordionTitle' ).click(function() {
			if ( $( this ).hasClass( 'on' ) ) {
				$( this ).removeClass( 'on' ).next().slideUp( 250 );
			} else {
				$( this ).closest( '.tabsVertical' ).find( '.tabAccordionTitle' ).removeClass( 'on' );
				$( this ).closest( '.tabsVertical' ).find( '.tabAccordionContent' ).delay( 250 ).slideUp( 250 );
				$( this ).addClass( 'on' ).next().slideDown( 250 );
			}
		});
		
		$( '.tabsVertical' ).each(function() {
			var open_first = $( this ).data( 'open-first' );
			if ( open_first == 'yes' ) {
				$( this ).find( '.tabAccordionTitle' ).first().click();
			}
		});

		/* Tabs */
		
		$( '.tabsHorizontal ul.tabsHeader li' ).click(function() {
			$(this).siblings().removeClass( 'on' );
			$( this ).addClass( 'on' );
			$( this ).parent().parent().find( '.tabPanes .tabPane' ).removeClass( 'on' );
			$( this ).parent().parent().find( '.tabPanes .tabPane' ).eq( $(this).index() ).addClass( 'on' );
		});

		$( '.tabsHorizontal ul.tabsHeader' ).each(function(){
			$( this ).find( 'li' ).first().click();
		});

		/* Dropdown */

		$( '.btDropdownSelect' ).fancySelect({forceiOS: true}).on( 'change.fs', function( e ) {
			var url = $( this ).parent().find( '.options .selected' ).data( 'raw-value' );
			if ( url != '' ) window.location = url;
		});

		// Wrap inline row
		$( '.btIconImageRow > div' ).wrap( '<div class="btIconImageCell"></div>' );
		$.each( $( '.btIconImageRow' ), function() {
			$( this ).addClass( 'btCells-' + $( this ).children( 'div' ).length );
		});


	});

})( jQuery );