<?php

			$dir = "/Users/kristin/ballardworkshop/website/code-kriyas/";
			// $dir = getcwd();
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