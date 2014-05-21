$(document).ready(function()
{

	function basePopoverAction(ourDiv)
	{
		// setting this to a var in order to work around the fact that loaded data becomes 'this' inside of GET's callback function, preventing the intended append
			trigger = $(ourDiv);
			$.get("partials/basePopover.html")
			.done(function(data)
			{
				$(trigger).closest('.popup-location').append(data);
				$('#basePopoverWrapper').fadeIn('fast');


				// set the actions for loading the embedded popovers when it's time
				$('#embeddedPopoverTrigger').click(function(e)
				{
					embedTrigger = $(this);
					$.get("partials/embeddedPopover.html")
						.done(function(data)
						{
							$(embedTrigger).parent().append(data);
							$('#embeddedPopoverWrapper').fadeIn('fast');
							$('#btnCancelEmbedded, #clickCloseEmbed').click(function()
							{
								$('#embeddedPopoverWrapper').fadeOut('fast').remove();
							});
						});
						return false; // prevent default click action from happening!
						//e.preventDefault(); // same thing as above
				});


				// set the closing action
				$('#clickClose, #btnCancel').click(function()
				{
					$('#basePopoverWrapper').fadeOut('fast').remove();
					return false;
				});
			});
	};

	$('.triggerBasePopover').click(function()
	{
		if($('#basePopoverWrapper').length > 0)
		{
			$('#basePopoverWrapper').fadeOut('fast').remove();
			basePopoverAction(this);
		}
		else
		{
			basePopoverAction(this);
		}
		return false;
	});










	$('.data-reveal').click(function()
	{
		$(this).next('.data-box').slideToggle(500, 'swing');

	});

	$('.btnRemoveRow').click(function()
	{
		var removedRow = $(this).closest('.row-data');
		var theContents = $(removedRow).html();
		$(removedRow).css({'background':'#cb7844','color':'#ffffff'});
		$(removedRow).slideUp(500, '', function()
			{
				$(theContents).fadeOut(5000);
				$(removedRow).remove();
			});
		
		//alert(theContents);
		// adding this as a callback function doesn't break the CSS method. when added as an unchained item, last in the chain, it broke the CSS method
			
		return false;
	});
	

	
/*
	click header-trigger
		
		set variable to check for display value
		define function to check id and return class

		check if menu is hidden
		if menu is hidden
			show it
			check the id of the trigger
			show that id's menu
		else
			the menu is visible
			check the id of the trigger
			show that id's menu
*/

	$('.trigger-header').click(function(e)
	{
		var seeme = $('.settings-menu').css('display');
		
		var idMe = $(this).attr('id');
		var submenuToShow = idMe.replace('trigger-','');

		subMenuSwitcher = function()
		{
			$('.settings-submenu').removeClass('settings-submenu');
			$("#" + submenuToShow).addClass('settings-submenu');
			return false;
		}

		switch (seeme)
		{

			case 'block':
				subMenuSwitcher(submenuToShow);
				break;
				

			case 'none':
				
				
				$('.settings-menu').slideDown('fast');
				subMenuSwitcher(submenuToShow);
				break;

		}
		// prevent window scroll
			return false;
			//e.preventDefault();
		
	});










	// closing or saving the sliding header settings menu
	$('#settings-button-save, #settings-button-cancel').click(function(e)
		{
			$('.settings-menu').slideUp('fast');

			// prevent window scroll
			return false;
			//e.preventDefault(); 
		});










	//Off-canvas menu
   var $page = $('#pinion-app-page, .settings-menu, .sticky-footer, .header-mobile, .header-tablet, .header-desktop, .big-header-band, #ocm-outer-page-wrapper'),
       $mainMenu = $('#main-menu'),
       $switch = $('.mobile-header-switch, .header-switch');

   $switch.on('touchstart click', function(e) {
      e.preventDefault();
      $page.toggleClass("open");
      $mainMenu.toggleClass("open");
      $(this).toggleClass("open");
   });
      $('#pinion-app-page').on('touchstart click', function() {
      $page.removeClass("open");
      $mainMenu.removeClass('open');
      $switch.removeClass("open");
   });






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





































});