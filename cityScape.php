<?php include 'header.php'; ?>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#bulb").plaxify()
			$("#smallGear").plaxify()
			$("#bigGear").plaxify()
			$("#bulbShadow").plaxify()
			$("#smallShadow").plaxify()
			$("#bigShadow").plaxify()
			$("#cityScape").plaxify()
			$("#cityShadow").plaxify()
			$.plax.enable()
		})
	</script>

	<div id = "background">
		<div id = "shell">
			<div id = "bulbContainer">
				<img id="bulb" src="img/lightbulb_1.png"  data-xrange="50" data-yrange="50" />
				<img class = "gear" id="smallGear" src="img/littlegear.png"  data-xrange="50" data-yrange="50" />
				<img class = "gear" id="bigGear" src="img/bigGear.png"  data-xrange="50" data-yrange="50" />
			</div>
			<div id = "shadowContainer">
				<img id="bulbShadow" src="img/lightbulb_shadow.png" data-gyroRange="15" 
					data-xrange="100" data-yrange="100" />
				<img class = "gear" id="smallShadow" src="img/littlegearshadow.png" data-gyroRange="15" 
					data-xrange="100" data-yrange="100" />
				<img class = "gear" id="bigShadow" src="img/biggearshadow.png" data-gyroRange="15" 
					data-xrange="100" data-yrange="100" />		
			</div>
			<img id="cityScape" src="img/cityscape.png" data-xrange="0" data-yrange="0" />
			<img id="cityShadow" src="img/cityscape_white.png" data-xrange="40" data-yrange="40" />
		</div>
	</div>

<?php include 'footer.php'; ?>