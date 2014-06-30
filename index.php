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

			<?php
				// get contents of a directory.
				// return the files of designated suffix and the date they were created.
				function scanAndSort_directory($directory, $suffix){
					$allFiles = scandir($directory);
					$onlySuffixedFiles = array();
					foreach ($allFiles as $key => $value){
						if (substr_count($value, $suffix) > 0)
							$onlySuffixedFiles[] = $value;
					}
					return $onlySuffixedFiles;
				}
				print_r(scanAndSort_directory('code-kriyas', '.php'));
			?>

			<div id="navContainer">
				<nav>
					<ul>
						<?php
						// $dir = getcwd();
						$dir = "code-kriyas/";
						$fullTitles = scandir($dir);
						
						$onlyPHPtitles = array();
						$suffix = ".php";
						foreach ($fullTitles as $key => $value){
							if (substr_count($value, $suffix) > 0)
								$onlyPHPtitles[] = $value;
						}

						//create an array of arrays. that's the thing to do, methinks.
						$dateModified = null;
						
						echo '<ul>';
						foreach($onlyPHPtitles as $niblet){
							$unprettyChars = array("_", "-", ".php");
							if($niblet != 'index'){
								$dateModified = date ("F d Y", filemtime('code-kriyas/'.$niblet));
								$cleanString = str_replace($unprettyChars, " ", $niblet);
							}
							echo '<li>'.$dateModified.' <a href="code-kriyas/' .$niblet. '">' .$cleanString. '</a></li>';
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
