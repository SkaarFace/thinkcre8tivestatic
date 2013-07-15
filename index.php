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
		<div id = "shell" class = "fullSizeContent">
			<div id = "bulbContainer">
				<img id="bulb" src="img/lightbulb_1.png"  data-xrange="50" data-yrange="50" />
				<img class = "gear" id="smallGear" src="img/littlegear.png"  data-xrange="50" data-yrange="50" />
				<img class = "gear" id="bigGear" src="img/bigGear.png"  data-xrange="50" data-yrange="50" />
			</div>
			<div id = "shadowContainer">
				<img id="bulbShadow" src="img/lightbulb_shadow.png" data-gyroRange="15" 
					data-xrange="100" data-yrange="70" />
				<img class = "gear" id="smallShadow" src="img/littlegearshadow.png" data-gyroRange="15" 
					data-xrange="100" data-yrange="70" />
				<img class = "gear" id="bigShadow" src="img/biggearshadow.png" data-gyroRange="15" 
					data-xrange="100" data-yrange="70" />		
			</div>
			<img id="cityScape" src="img/cityscape.png" data-xrange="0" data-yrange="0" />
			<img id="cityShadow" src="img/cityscape_white.png" data-xrange="20" data-yrange="0" />
		</div>
	</div>

	<section id = "mainContent">
		<section class = "servicesContainer">
			<ul>
				<a class = "ajax" href="services_text.html">
					<li class = "service socialMedia">
						<h2>
							Social Media
						</h2>
						<img src = "./img/socialIcon.png" alt = "Social Media" />
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Ducimus, beatae, maxime aliquam voluptatum fuga numquam autem
						</p>
					</li>
				</a>
				<a class = "ajax" href="services_text.html">
					<li class = "service webWork">
						<h2>
							Web Work
						</h2>
						<img src = "./img/webIcon.png" alt = "Web Work" />
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Ducimus, beatae, maxime aliquam voluptatum fuga numquam autem
						</p>
					</li>
				</a>
				<a class = "ajax" href="services_text.html">
					<li class = "service software">
						<h2>
							Software
						</h2>
						<img src = "./img/softwareIcon.png" alt = "Software" />
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Ducimus, beatae, maxime aliquam voluptatum fuga numquam autem
						</p>
					</li>
				</a>
				<a class = "ajax" href="services_text.html">
					<li class = "service video">
						<h2>
							Video
						</h2>
						<img src = "./img/videoIcon.png" alt = "Video" />
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Ducimus, beatae, maxime aliquam voluptatum fuga numquam autem
						</p>
					</li>
				</a>
				<a class = "ajax" href="services_text.html">
					<li class = "service print">
						<h2>
							Print
						</h2>
						<img src = "./img/printIcon.png" alt = "Print" />
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Ducimus, beatae, maxime aliquam voluptatum fuga numquam autem
						</p>
					</li>
				</a>
				<a class = "ajax" href="services_text.html">
					<li class = "service consulting">
						<h2>
							Consulting
						</h2>
						<img src = "./img/consultingIcon.png" alt = "Consulting" />
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Ducimus, beatae, maxime aliquam voluptatum fuga numquam autem
						</p>
					</li>
				</a>
			</ul>
		</section>
		<section class = "blogPost">
			<div class="fb-like-box" data-href="https://www.facebook.com/ThinkCre8tive" data-width="292" data-show-faces="True" data-colorscheme="light" data-stream="True" data-show-border="True" data-header="True"></div>		</section>
	</section>

<?php include 'footer.php'; ?>