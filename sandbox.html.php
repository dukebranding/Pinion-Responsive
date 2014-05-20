<?php include('partials/file-head.html.php'); ?>
<body>


<style>
	li.rot
	{
		width: 60px; height: 200px; 
		display: inline-block;
		background: khaki;
		vertical-align: top;
	}
	div.rot
	{
		transform: rotate(90deg);
		transform-origin: 0px 60px 0;
		width: 200px; height: 60px;
		background: tomato;
	}

</style>

<ul>
	<li class="rot">
		<div class="rot">Rotated Text 1</div></li>
	<li class="rot">
		<div class="rot">Rotated Text 2</div></li>
	<li class="rot">
		<div class="rot">Rotated Text Three</div></li>
</ul>












<?php include('partials/file-footer.html.php'); ?>