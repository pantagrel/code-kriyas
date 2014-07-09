	<html>
		<head>
			<title>Parallax One</title>
			<script type="text/javascript" src="//use.typekit.net/gle3hly.js"></script>
			<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
			<link rel="stylesheet" type="text/css" href="../_css/topLevelStyle.css">
			<!-- javascript files go here -->
		</head>
		
		<body>
			<?php
				include '../_includes/kriyas-header.php';
			?>
			<div id="kriya">
				<h3
				data-start="position: absolute;
				top: 100px;
				left: 0;
				opacity: 1;
				"
				data-center="left: 100%;
				opacity: 0;"
				>Simple Parallax Test.
			</h3>

			<section>
				<p style="height: 200px;"></p>
				<div style="padding: 1em;" data-100="background-color:rgb(235,233,168); 
				transform:rotate(5deg);" 
				data-end="transform:rotate(25deg);">
					learning to be present in
				</div>
				<div style="padding: .5em;" data-start="background-color:rgb(235,196,135); 
				transform:rotate(0deg);" 
				data-700="transform:rotate(-25deg);"
				>
					the space around the question.
				</div>
				
			</section>
			<section>
			<div data-300="width: 0%;
			background-color:rgb(125,41,72);
			height: 0%;
			left: 50%;
			top: 50%;
			position: absolute;"
			div data-3500="width: 70%;
			background-color:rbg(18,16,40);
			height: 15%;
			width: 15%;
			left: 50%;
			top: 500%;
			position: absolute;"
			</section>

						<section>
			<div data-200="width: 30%;
			background-color:rgb(125, 41, 72);
			height: 50%;
			width: 50%
			left: 20%;
			top: 50%;
			position: absolute;"
			div data-3500="width: 10%;
			background-color:rbg(55, 14, 48);
			height: 65%;
			left: 0%;
			top: 350%;
			position: absolute;"
			</section>
			<section>
			<div data-200="width: 30%;
			background-color:rgb(125, 41, 72);
			height: 40%;
			width: 40%
			left: 18%;
			top: 200%;
			position: absolute;"
			div data-3500="width: 10%;
			background-color:rbg(55, 14, 48);
			height: 50%;
			left: 40%;
			top: 40%;
			position: absolute;"
			</section>
			<section style="position: absolute; top: 300px;">
				<h1 style="font-size: 3em; padding: 0;"
				data-start="
				opacity: 1;
				top: 700%;
				left: 0%;
				"
				data-350="left: 100%;
				opacity: 0;
				"
				>Q:</h1>
				
				<h3 style="width: 5em;"
				<data-start="position: absolute;
				background-color: rbg(210, 209, 217);
				left: 0%;
				top: 701%;
				"
				data-100-end="left: 100%;
				top: 250px;
				background-color: rgb(210, 209, 217);
				"
				data-end="
				background-color: rbg(235,233,168);
				padding: 1em;
				border-radius: 5px;"
				>
				When is the kriya done?</h3>
			</section>
				
			</div><!-- kriya -->
			<script type="text/javascript" src="./_js/libraries/skrollr.min.js"></script>
    		<script type="text/javascript">
    		var s = skrollr.init();
    		</script>
	</body>
	</html>
