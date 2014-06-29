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
								$navigationList[] = $value;
						}

						$navigationList_reverse = array_reverse($navigationList);

						$currentPage_value = $_SERVER['REQUEST_URI'];

						//removes the folder from beginning of pagename string:
						$currentPage_value = substr($currentPage_value, 13);

						// current page's position in the array:
						$currentPage_key = array_search($currentPage_value, $navigationList_reverse);
						$navList_length = count($navigationList_reverse);
					
						if ($currentPage_key > 0 && $currentPage_key < ($navList_length - 1)){
							echo '<a href="' .$navigationList_reverse[$currentPage_key-1]. '">previous</a> | <a href="' .$navigationList_reverse[$currentPage_key+1]. '">next</a></p>';
						} else if ($currentPage_key == 0){
							echo '<a href="' .$navigationList_reverse[$currentPage_key+1]. '">next</a></p>';
						} else if ( $currentPage_key == ($navList_length - 1) ){
							echo '<a href="' .$navigationList_reverse[$currentPage_key-1]. '">previous</a></p>';
						} else echo 'navigation breakdown';
					?>

				</div><!-- pagination -->
			</div><!-- topNav -->
		</nav>