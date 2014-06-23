<h3>
	/dir/ contents:
</h3>

<?php
$dir = "/Users/kristin/ballardworkshop/website/code-kriyas/";

// Sort in ascending order - this is default
$kriyas = scandir($dir);

print_r($kriyas);

?>

<h3>
	shuffle:
</h3>

<?php

$shuffleKriyas = $kriyas;
shuffle($shuffleKriyas);
foreach ($shuffleKriyas as $niblet) {
    echo "$niblet ";
}
?>

<h3>
	only .html files:
</h3>

<?php
$newArray = array();
$suffix = ".html";

foreach ($kriyas as $key => $value){
	if (substr_count($value, $suffix) > 0)
		$newArray[] = $value;
}

// create links from the array values (which are the page names):


// make the array into a list:
echo '<ul>';
foreach($newArray as $niblet){
	echo '<li>'.$niblet.'</li>';
}
echo '</ul>';


?>