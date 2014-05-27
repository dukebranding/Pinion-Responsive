$.fn.stickyfloat = function(options, lockBottom) {
	var $obj 				= this;
	

	var parentPaddingTop 	= parseInt($obj.parent().css('padding-top'));
	// id. set the starting position so that the Data GridSticky Header will be just under the fixed App header. Overriding the var set above.
	var parentPaddingTop 	= 51;
	var startOffset 		= $obj.parent().offset().top;
	var opts 				= $.extend({ startOffset: startOffset, offsetY: parentPaddingTop, duration: 200, lockBottom:true }, options);
	
	$obj.css({ position: 'absolute' });
	
	if(opts.lockBottom)
	{
		var bottomPos = $obj.parent().height() - $obj.height() + parentPaddingTop;
		if( bottomPos < 0 )
			bottomPos = 0;
	}


	
	$(window).scroll(function ()
	{ 
		$obj.stop(); 

		
		var pastStartOffset			= $(document).scrollTop() > opts.startOffset;	
		var objFartherThanTopPos	= $obj.offset().top > startOffset;	
		var objBiggerThanWindow 	= $obj.outerHeight() < $(window).height();	

// id here
		// if ( $('header').hasClass('big-header-band-smaller'))
		// {
			//parentPaddingTop = 51;
			// alert('yes');
		// }
		// else
		// {
			//parentPaddingTop = 51;
			// alert('no');
		// }
// idhere

		if( (pastStartOffset || objFartherThanTopPos) && objBiggerThanWindow )
		{ 
			var newpos = ($(document).scrollTop() -startOffset + opts.offsetY );
			if ( newpos > bottomPos )
				newpos = bottomPos;

			// id. adding '-51' to if statement below to ensure that Data Grid Sticky Header returns to normal position when doc is scrolled back to top
			if ( $(document).scrollTop() < opts.startOffset ) 
			
				newpos = parentPaddingTop-51 ;
				


			$obj.animate({ top: newpos }, opts.duration );

			
		}

	});
};