<h3>
	/dir/ contents:
</h3>

<?php
//figure out where you're at. what kind navigation is necessary?
//next/previous type nav or index-level nav?

$dir = getcwd();
// $dir = "/Users/kristin/ballardworkshop/website/code-kriyas/";

// Sort in ascending order - this is default
$fullTitles = scandir($dir);

print_r($fullTitles);

?>

<h3>
	shuffle:
</h3>

<?php

$shuffleTitles = $fullTitles;
shuffle($shuffleTitles);
foreach ($shuffleTitles as $title) {
    echo "$title ";
}
?>

<h3>
	only .html files:
</h3>

<?php
$trimmedTitles = array();
$suffix = ".html";

foreach ($fullTitles as $key => $value){
	// $value = substr($value, 3);
	if (substr_count($value, $suffix) > 0)
		
		// remove suffix so link is presentable
		
		$trimmedTitles[] = substr($value, 0, -5);
}

// print the array of links, add the suffix back for the ahref:
echo '<ul>';
foreach($trimmedTitles as $niblet){
	// dont want to show the index link
	if($niblet != 'index')
	echo '<li><a href="' .$niblet. '.html">' .$niblet. '</a></li>';
}
echo '</ul>';

?>

<h3>
	what page are you on? what's 'next' and 'previous'?
</h3>

<?php
// what page are we on?

// $currentPage = '06_test2';
echo $_SERVER['REQUEST_URI'];
echo '<p></p>';

// is this page part of the array?
$whatPage = array_search($currentPage, $trimmedTitles);
$startPage = array_search('directoryTest.php', $fullTitles);
if ($whatPage > 0){
	echo '<p>current page: '.$whatPage.'</p>';
	echo '<p>previous page: '.($trimmedTitles[$whatPage-1]).'</p>';
	echo '<p>next page: '.($trimmedTitles[$whatPage+1]).'</p>';
} else if ($startPage > 0) {
	echo '<p>next page: '.($trimmedTitles[0]).'</p>';
} else echo 'nothing going';
?>

