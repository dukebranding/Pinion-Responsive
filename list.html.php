<?php include('partials/file-head.html.php'); ?>
<body class="interior-page">

<!-- this is the markup pattern for the off canvas menu -->
<div id="main-menu" class="">
	<div class="main-menu-content">
		<ul class="menu-list">
			<?php include('partials/left-menu-sample.html.php'); ?>
		</ul>
	</div>
</div>



<?php include('partials/big-header-band.html.php'); ?>





<!-- this is where the page contents go -->
<div id="pinion-app-page" class="">


	<div class="top-section">
		<?php include('partials/page-title-menu-nav.html.php'); ?>
	</div>


	<div class="wrapper">
		<?php include('partials/row-data.html.php'); ?>

		
	</div>


</div>



<!-- markup for the cloned scroll header -->
<div>
	<div class="wrapper">
		<div class="row-data-wrapper">
			<div class="hide-on-mobile hide-on-tablet">
				<div class="grid-container">
					<div class="grid-20">&nbsp;</div>
					<div class="grid-80 grid-parent">
						<div class="grid-100 grid-parent">
							<div>
								<div class="scroll-header">
								<!-- the data grid's row header should be placed into here -->
							</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('partials/sticky-footer.html.php'); ?>
<?php include('partials/file-footer.html.php'); ?>