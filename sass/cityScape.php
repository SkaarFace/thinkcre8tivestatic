<?php include 'header.php'; ?>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#bulb").plaxify()
			$("#bulbShadow").plaxify()
			$("#cityScape").plaxify()
			$("#cityShadow").plaxify()
			$.plax.enable()
		})
	</script>

	<div id = "background">
		<div id = "shell">
			<img id="bulb" src="img/lightbulb_1.png"  data-xrange="50" data-yrange="50" />
			<img id="bulbShadow" src="img/lightbulb_shadow.png" data-xrange="70" data-yrange="70" />
			<img id="cityScape" src="img/cityscape.png" data-xrange="20" data-yrange="20" />
			<img id="cityShadow" src="img/cityscape_white.png" data-xrange="40" data-yrange="40" />
		</div>
	</div>

<?php include 'footer.php'; ?>