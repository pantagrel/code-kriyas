<html>
<head>
<title>Ballard Workshop</title>
	<script type="text/javascript" src="//use.typekit.net/gle3hly.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="_css/topLevelStyle.css">

	<script src="https://code.createjs.com/easeljs-0.8.0.min.js"></script>

	<script>
  function init() {
    var stage = new createjs.Stage("demoCanvas");
    var circle = new createjs.Shape();
	circle.graphics.beginFill("DeepSkyBlue").drawCircle(0, 0, 50);
	circle.x = 100;
	circle.y = 100;
	stage.addChild(circle);
	stage.update();
  }
</script>
	
</head>

<body onload="init();">
	
	<nav>
			<div id="topNav">
				<div id="logo">
				<h1><a href="../">Ballard Workshop</a></h1>
			</div>
	</nav>
<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	include '_includes/functions.php';
	//include '_includes/variables.php';
?>


	<div id="about_page">
		<p class="video">
			BLUSTER.
		</p>
		<canvas id="demoCanvas""></canvas>
		<?php
			// echo about_text();
			echo random_video();
			// echo '<p>.</p><p>'.$_SERVER['HTTP_USER_AGENT'].'</p>';
		?>

		

		<script>
			console.log();
		</script>
	</div><!-- about_page -->

</body>
</html>