<html>
<head>
<title>Ballard Workshop</title>
	<script type="text/javascript" src="//use.typekit.net/gle3hly.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="_css/topLevelStyle.css">
	<link rel="stylesheet" type="text/css" media="only screen and (min-width: 50px) and (max-width: 780px)" href="_css/screen_layout_small.css" />
	
</head>

<body>
	
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
						// $dir = getcwd();
						$dir = "/Users/kristin/ballardworkshop/website/code-kriyas/";
						$fullTitles = scandir($dir, 1);

						$trimmedTitles = array();
						$suffix = ".php";

						foreach ($fullTitles as $key => $value){
							if (substr_count($value, $suffix) > 0)
								$trimmedTitles[] = substr($value, 0, -4);
						}
						
						// print the array of links, add the suffix back for the ahref:
						echo '<ul>';
						foreach($trimmedTitles as $niblet){
							$unprettyChars = array("_", "-");
							if($niblet != 'index')
								$cleanString = str_replace($unprettyChars, " ", $niblet);
								$cleanString_noNum = substr($cleanString, 2);
							echo '<li><a href="code-kriyas/' .$niblet. '.php">' .$cleanString_noNum. '</a></li>';
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
