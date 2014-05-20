<div class="header-wrapper">

		<?php include('partials/settings-menu.html.php'); ?>


		<!-- tablet -->
		<header class="big-header-band hide-on-mobile" id="big-header">
			<div class="grid-container">
				<div class="tablet-grid-50 grid-66 ">
					<div class="hide-on-desktop switch ">
						<a class="mobile-header-switch" href="#">
							<i class="fa fa-bars"></i> Menu
						</a>
					</div>
					<div class="brand">
						<a href="index.html.php">
							<i class=""></i> Brand
						</a>
					</div>
				
					<div class="header-userstate">
						<p class="header-username">Firstname Lastname</p>
						<p class="header-permission-state">Permissionstate</p>
					</div>
				</div>
				<div class="tablet-grid-50 grid-33 grid-parent text-right ">
						<a href="#" class="big-header-band-menu-item trigger-header" id="trigger-my-settings">
							<i class="fa fa-cog"></i> Settings
						</a>
						<a href="#" class="big-header-band-menu-item trigger-header" id="trigger-my-account">
							<i class="fa fa-tag"></i> My Account
						</a>
						<a href="#" class="big-header-band-menu-item big-header-band-menu-item-button " id="trigger-sign-out">
							Sign Out
						</a>
				</div>		
			</div>
		</header>	


		<!-- mobile-specific header -->
		<div class=" mobile-header hide-on-tablet hide-on-desktop">
			<div class="grid-container">
				<div class="mobile-grid-33">
					<a class="mobile-header-switch" href="#">
						<i class="fa fa-bars"></i> Menu
					</a>
				</div>
				<div class="mobile-grid-33">
					<a class="mobile-header-brand" href="index.html.php">
						<i class=""></i> Brand
					</a>
				</div>
				<div class="mobile-grid-33">
					<a href="#" class="mobile-header-button">
						<i class="fa fa-sign-out"></i> Logout
					</a>
				</div>
			</div>
		</div>
</div>