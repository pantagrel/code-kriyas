<html>
	<head>
		<title>This is the first shape test.</title>
		<script type="text/javascript" src="//use.typekit.net/gle3hly.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="http://code.createjs.com/easeljs-0.7.1.min.js"></script>
		<script type="text/javascript" src="_js/circles.js"></script>
		<link rel="stylesheet" type="text/css" href="_css/style.css">

	</head>
	<body onload="init();">
		<canvas id="canvas" width="500" height="300">
			alternate content
		</canvas>
		<h3>
		Those circles up there are made from javascript.
	</h3>
		<p>
		I am reminded of times past. Like a flash, a spark!
		</p>
		<p>
			...
		</p>
		<?php

			$dir = getcwd();
			$fullTitles = scandir($dir, 1); //provides everything in current directory

			$suffix = ".php";
			foreach ($fullTitles as $key => $value){
				if (substr_count($value, $suffix) > 0)
					//only consider .php files for our navigation
					$navigationList[] = $value;
			}
						
			// what page are we on?
			// line below returns the folder, also. how to incorporate that intelligently?
			$currentPage = $_SERVER['REQUEST_URI'];

			$currentPage = substr($currentPage, 13);			
			echo '<p>current pages:</p><p>' . $currentPage . '</p>';
			echo '<p></p>';
			
			// is this page part of the array?
			$whatPage = array_search($currentPage, $navigationList);
			// print_r($whatPage);

			// $startPage = array_search('index.php', $fullTitles);
			
			if ($whatPage > 0){
				echo '<p>current: '.$navigationList[$whatPage].'</p>';
				echo '<p>next: '.($navigationList[$whatPage-1]).'</p>';
				echo '<p>previous: '.($navigationList[$whatPage+1]).'</p>';
			} else if ($startPage > 0) {
				echo '<p>next page: '.($navigationList[0]).'</p>';
			} else echo 'false';
		?>
	</body>
</html>