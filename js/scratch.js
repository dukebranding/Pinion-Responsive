	var datarow = $('.data-row-object').html();
	var datarowcount = datarow.length;
	// alert(datarow);
	var headerFixed = false;


	$( window ).scroll(function()
	{

		if ($('header.big-header-band').hasClass('big-header-band-smaller') && headerFixed = false)
		{
			$(datarow).appendTo('.scroll-header');
			headerFixed = true;
		}
		else
		{
			headerFixed = false;
		}
	});






var lastScrollTop = 0;

$(window).scroll(function(event)
{

	var st = $(this).scrollTop();

	if (st > lastScrollTop)
	{
		// downscroll code
		alert(st);
	} 
	else 
	{
		// upscroll code
		alert(st);
	}
	lastScrollTop = st;
});