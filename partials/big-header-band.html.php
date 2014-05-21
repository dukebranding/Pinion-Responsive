<div class="header-wrapper">
	<?php include('partials/settings-menu.html.php'); ?>


	<!-- phone -->
	<div class="hide-on-tablet hide-on-desktop header-mobile">
		<div class="mobile-header">
			<div class="grid-container">
				<div class="mobile-grid-15 text-left">
					<a class="mobile-header-switch" href="#">
						<i class="fa fa-bars"></i>
					</a>
				</div>
				<div class="mobile-grid-40">
					<a class="mobile-header-brand" href="index.html.php">
						<img src="images/logo.svg" alt="" class="brand-logo" border="0" /> 
					</a>
				</div>
				<div class="mobile-grid-45 text-right">
					<a href="#" class="mobile-header-button">
						<i class="fa fa-sign-out"></i> Log Out
					</a>
				</div>
			</div>
		</div>
	</div>


	<!-- desktop -->
	<div class="header-desktop hide-on-mobile">
		<header class="big-header-band">
			<div class="grid-container">
				<div class="tablet-grid-5 hide-on-desktop">
					<a class="header-switch" href="#">
						<i class="fa fa-bars"></i> 
					</a>
				</div>
				<div class="tablet-grid-50  grid-50">
					
					<a class="header-brand" href="index.html.php">
						<img src="images/logo.png" alt="" class="brand-logo" border="0" /> 
					</a>
				
				
					<span class="header-username hide-on-mobile">Firstname Lastname</span>
					
					<span class="header-permission-state hide-on-mobile">Permissionstate</span>
					
				</div>
				<div class="tablet-grid-45 grid-45 text-right">
					<a href="#" class="big-header-band-menu-item trigger-header" id="trigger-my-settings">
						<i class="fa fa-cog"></i> Settings
					</a>
					<a href="#" class="big-header-band-menu-item trigger-header" id="trigger-my-account">
						<i class="fa fa-tag"></i> My Account
					</a>
					<a href="#" class="big-header-band-menu-item big-header-band-menu-item-button " id="trigger-sign-out">Logout</a>
				</div>
			</div>
		</header>
	</div>


</div><!-- header wrapper -->