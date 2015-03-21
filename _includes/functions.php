<?php
	// get contents of a directory.
	// return the files of designated suffix and the date they were created
	function dateSort_directory($directory, $suffix){
		$allFiles = scandir($directory);
		foreach ($allFiles as $key => $value){
			if (substr_count($value, $suffix) > 0){
				$onlySuffixedFiles[] = $value;
				$tempDateHolder[] = date ("m/d/y H:i:s", filemtime($directory.$value));
				}	
		}
		// here's where i had to combine two arrays
		// $datedFiles = array_combine($tempDateHolder, $onlySuffixedFiles);
		// sort by key:
		// krsort($datedFiles, $sort_flags = SORT_REGULAR);
		// return $datedFiles;

		return $onlySuffixedFiles;
	}
	// print_r(dateSort_directory('code-kriyas/', '.php'));
?>

<?php
		function square()
		{
			$array = array(
				"one" => "this is story one",
				"two" => "this is story two",
				"three" => "this is story three",
				"four" => "this is story four",
				)
		$rand_keys = array_rand($array, 1)
		return $rand_keys;
		}
?>