<html>
<head>
<title>Ballard Workshop</title>
	<script type="text/javascript" src="//use.typekit.net/gle3hly.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="_css/topLevelStyle.css">
	
</head>

<body>
	
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
		<?php
			echo square();
			echo '<p>.</p><p>'.$_SERVER['HTTP_USER_AGENT'].'</p>';
		?>
	</div><!-- about_page -->

</body>
</html>