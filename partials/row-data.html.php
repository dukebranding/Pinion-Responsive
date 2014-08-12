<div class="row-data-wrapper">

	<!-- desktop -->
	<div class="hide-on-mobile hide-on-tablet " id="">
		<!-- load the left menu in this one too -->
		<div class="grid-container">
			<div class="grid-20">
				<!-- left menu here -->
				<?php include('partials/left-menu-sample.html.php'); ?>
			</div>
			<div class="grid-80 grid-parent">
				<!-- each page of row data will have a header, but not in the KO loop -->
				<!-- row header first -->
					<div id="data-grid-header" class=" data-row-object">
						<div class="row-data-header-desktop" >
							<div class="grid-100 grid-parent">
								<div class="grid-5">&nbsp;</div>
								<div class="grid-20">Header Text</div>
								<div class="grid-20">Header Text</div>
								<div class="grid-20">Header Text</div>
								<div class="grid-20">Header Text</div>
								<div class="grid-15">&nbsp;</div>
							</div>
						</div>
					</div>
				<!-- data row next -->
				<!-- begin KO loop -->
					<?php include('partials/big-list-desktop.html.php'); ?>
				<!-- end KO loop -->
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>

 
	<!-- tablet, mobile -->
	<div class="hide-on-desktop " id="">
		<!-- dont load left menu -->
		<div class="grid-container">
			<!-- each page of row data will have a header, but not in the KO loop -->
			<!-- row header first -->
				<div class="row-data-header-tablet">
					<div class="mobile-grid-100 tablet-grid-100">
						<p>Description of Data</p>
					</div>
				</div>
			<!-- data row next -->
			<!-- begin KO loop -->
				<?php include('partials/big-list-tablet.html.php'); ?>
			<!-- end KO loop -->
		</div>
	</div>
</div>