<html>
<head>
<title>Ballard Workshop</title>
	<script type="text/javascript" src="//use.typekit.net/gle3hly.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="_css/topLevelStyle.css">
	
</head>

<body>
	
<?php include("_includes/functions.php"); ?>

	<div id="page">
		<div id="masthead">
			<h1>BALLARD WORKSHOP</h1>
			<h4 id="subhead">SEATTLE, WASHINGTON</h4>
		</div> <!--masthead-->
		<div id="container">

			<div id="navContainer">
				<nav>
					<ul>
						
						<?php
						echo '<ul>';
						$titlesList = dateSort_directory('code-kriyas/', '.php');
						$unprettyChars = array("_", "-", ".php");
						// print_r($c);
						foreach ($titlesList as $key => $value){
								$trimKey = substr($key, 0, 8);
								$prettyTitle = str_replace($unprettyChars, " ", $value);
								echo '<li><span class="date">' .$trimKey. ':</span>  <span class="kriyaTitle"><a href="code-kriyas/'.$value.'">'.$prettyTitle.'</a></span></li>';
							}
						echo '</ul>';
						?>

					</ul>
				</nav>
			</div><!--navContainer-->
			
		</div><!--container-->

</div><!--page-->


<div id="forkMe">
	<a href="https://github.com/pantagrel/code-kriyas"><img style="position: absolute; top: 0; left: 0; border: 0;" src="_img/forkMe_TL.png" alt="Fork me on GitHub"></a>
	</div>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-5412349-7', 'ballardworkshop.com');
	  ga('send', 'pageview');

	</script>

</body>
</html>
