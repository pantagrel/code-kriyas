		<nav>
			<div id="topNav">
				<div id="logo">
				<h1><a href="../">Ballard Workshop</a></h1>
				</div>
				<div id="pagination">
					<?php

						$dir = "../code-kriyas/";
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
						$startPage = array_search('index.php', $fullTitles);

						// is this page part of the array?
						$whatPage = array_search($currentPage, $navigationList);

						if ($whatPage > 0){
							// echo '<p>current: '.$navigationList[$whatPage].'</p>';
							echo '<p><a href="' .$navigationList[$whatPage+1]. '">previous</a> | <a href="' .$navigationList[$whatPage-1]. '">next</a></p>';
						} else if ($startPage > 0) {
							echo '<p>next page: '.($navigationList[0]).'</p>';
						} else echo 'false';
					?>
				</div><!-- pagination -->
			</div><!-- topNav -->
		</nav>