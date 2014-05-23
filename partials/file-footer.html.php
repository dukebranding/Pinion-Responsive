		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="js/classie.js"></script>
		<script type="text/javascript" src="js/sticky.js"></script>
		<script type="text/javascript">
			function init() 
			{

				window.addEventListener('scroll', function(e)
				{
					var distanceY = window.pageYOffset || document.documentElement.scrollTop,
					shrinkOn = 15,
					header = document.querySelector("header");
					
					
					var alphaPixel = $('.big-header-band').height();
					//the iZness
					
					$(window).scroll(function()
					{

						
						
					});

					if (distanceY > shrinkOn) 
					{
						classie.add(header,"big-header-band-smaller");
						
						//alert(iimg);
						//$('.settings-menu').css('top',50);
						$('.settings-menu').animate(
							{
								top: 50,

							},
							{
								queue: false,
								duration: 200
							});

					} 
					else 
					{
						
						if (classie.has(header,"big-header-band-smaller" ) )
						{
							classie.remove(header,"big-header-band-smaller");
							
							//$('.setting-menu').css('top',114);
							$('.settings-menu').animate(
							{
								top: 114
							},
							{
								queue: false,
								duration: 200
							});

						}
					}
					

					
					
				});

			}
			window.onload = init();
			
		</script>
		<script type="text/javascript">
		$(document).ready(function()
			{
				$('#data-grid-header').stickyfloat({ duration: 250 });
			});
		</script>
		

	</body>
</html>



